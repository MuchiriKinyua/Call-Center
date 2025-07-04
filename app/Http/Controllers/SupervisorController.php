<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSupervisorRequest;
use App\Http\Requests\UpdateSupervisorRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SupervisorRepository;
use Illuminate\Http\Request;
use Flash;

class SupervisorController extends AppBaseController
{
    /** @var SupervisorRepository $supervisorRepository*/
    private $supervisorRepository;

    public function __construct(SupervisorRepository $supervisorRepo)
    {
        $this->supervisorRepository = $supervisorRepo;
    }

    /**
     * Display a listing of the Supervisor.
     */
    public function index(Request $request)
    {
        $supervisors = $this->supervisorRepository->paginate(10);

        return view('supervisors.index')
            ->with('supervisors', $supervisors);
    }

    /**
     * Show the form for creating a new Supervisor.
     */
    public function create()
    {
        return view('supervisors.create');
    }

    /**
     * Store a newly created Supervisor in storage.
     */
    public function store(CreateSupervisorRequest $request)
    {
        $input = $request->all();

        $supervisor = $this->supervisorRepository->create($input);

        Flash::success('Supervisor saved successfully.');

        return redirect(route('supervisors.index'));
    }

    /**
     * Display the specified Supervisor.
     */
    public function show($id)
    {
        $supervisor = $this->supervisorRepository->find($id);

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('supervisors.index'));
        }

        return view('supervisors.show')->with('supervisor', $supervisor);
    }

    /**
     * Show the form for editing the specified Supervisor.
     */
    public function edit($id)
    {
        $supervisor = $this->supervisorRepository->find($id);

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('supervisors.index'));
        }

        return view('supervisors.edit')->with('supervisor', $supervisor);
    }

    /**
     * Update the specified Supervisor in storage.
     */
    public function update($id, UpdateSupervisorRequest $request)
    {
        $supervisor = $this->supervisorRepository->find($id);

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('supervisors.index'));
        }

        $supervisor = $this->supervisorRepository->update($request->all(), $id);

        Flash::success('Supervisor updated successfully.');

        return redirect(route('supervisors.index'));
    }

    /**
     * Remove the specified Supervisor from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $supervisor = $this->supervisorRepository->find($id);

        if (empty($supervisor)) {
            Flash::error('Supervisor not found');

            return redirect(route('supervisors.index'));
        }

        $this->supervisorRepository->delete($id);

        Flash::success('Supervisor deleted successfully.');

        return redirect(route('supervisors.index'));
    }
}
