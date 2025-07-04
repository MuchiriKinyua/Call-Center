<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEscalationRequest;
use App\Http\Requests\UpdateEscalationRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\EscalationRepository;
use Illuminate\Http\Request;
use Flash;

class EscalationController extends AppBaseController
{
    /** @var EscalationRepository $escalationRepository*/
    private $escalationRepository;

    public function __construct(EscalationRepository $escalationRepo)
    {
        $this->escalationRepository = $escalationRepo;
    }

    /**
     * Display a listing of the Escalation.
     */
    public function index(Request $request)
    {
        $escalations = $this->escalationRepository->paginate(10);

        return view('escalations.index')
            ->with('escalations', $escalations);
    }

    /**
     * Show the form for creating a new Escalation.
     */
    public function create()
    {
        return view('escalations.create');
    }

    /**
     * Store a newly created Escalation in storage.
     */
    public function store(CreateEscalationRequest $request)
    {
        $input = $request->all();

        $escalation = $this->escalationRepository->create($input);

        Flash::success('Escalation saved successfully.');

        return redirect(route('escalations.index'));
    }

    /**
     * Display the specified Escalation.
     */
    public function show($id)
    {
        $escalation = $this->escalationRepository->find($id);

        if (empty($escalation)) {
            Flash::error('Escalation not found');

            return redirect(route('escalations.index'));
        }

        return view('escalations.show')->with('escalation', $escalation);
    }

    /**
     * Show the form for editing the specified Escalation.
     */
    public function edit($id)
    {
        $escalation = $this->escalationRepository->find($id);

        if (empty($escalation)) {
            Flash::error('Escalation not found');

            return redirect(route('escalations.index'));
        }

        return view('escalations.edit')->with('escalation', $escalation);
    }

    /**
     * Update the specified Escalation in storage.
     */
    public function update($id, UpdateEscalationRequest $request)
    {
        $escalation = $this->escalationRepository->find($id);

        if (empty($escalation)) {
            Flash::error('Escalation not found');

            return redirect(route('escalations.index'));
        }

        $escalation = $this->escalationRepository->update($request->all(), $id);

        Flash::success('Escalation updated successfully.');

        return redirect(route('escalations.index'));
    }

    /**
     * Remove the specified Escalation from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $escalation = $this->escalationRepository->find($id);

        if (empty($escalation)) {
            Flash::error('Escalation not found');

            return redirect(route('escalations.index'));
        }

        $this->escalationRepository->delete($id);

        Flash::success('Escalation deleted successfully.');

        return redirect(route('escalations.index'));
    }
}
