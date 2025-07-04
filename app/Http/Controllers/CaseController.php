<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCaseRequest;
use App\Http\Requests\UpdateCaseRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CaseRepository;
use Illuminate\Http\Request;
use Flash;

class CaseController extends AppBaseController
{
    /** @var CaseRepository $caseRepository*/
    private $caseRepository;

    public function __construct(CaseRepository $caseRepo)
    {
        $this->caseRepository = $caseRepo;
    }

    /**
     * Display a listing of the Case.
     */
    public function index(Request $request)
    {
        $cases = $this->caseRepository->paginate(10);

        return view('cases.index')
            ->with('cases', $cases);
    }

    /**
     * Show the form for creating a new Case.
     */
    public function create()
    {
        return view('cases.create');
    }

    /**
     * Store a newly created Case in storage.
     */
    public function store(CreateCaseRequest $request)
    {
        $input = $request->all();

        $case = $this->caseRepository->create($input);

        Flash::success('Case saved successfully.');

        return redirect(route('cases.index'));
    }

    /**
     * Display the specified Case.
     */
    public function show($id)
    {
        $case = $this->caseRepository->find($id);

        if (empty($case)) {
            Flash::error('Case not found');

            return redirect(route('cases.index'));
        }

        return view('cases.show')->with('case', $case);
    }

    /**
     * Show the form for editing the specified Case.
     */
    public function edit($id)
    {
        $case = $this->caseRepository->find($id);

        if (empty($case)) {
            Flash::error('Case not found');

            return redirect(route('cases.index'));
        }

        return view('cases.edit')->with('case', $case);
    }

    /**
     * Update the specified Case in storage.
     */
    public function update($id, UpdateCaseRequest $request)
    {
        $case = $this->caseRepository->find($id);

        if (empty($case)) {
            Flash::error('Case not found');

            return redirect(route('cases.index'));
        }

        $case = $this->caseRepository->update($request->all(), $id);

        Flash::success('Case updated successfully.');

        return redirect(route('cases.index'));
    }

    /**
     * Remove the specified Case from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $case = $this->caseRepository->find($id);

        if (empty($case)) {
            Flash::error('Case not found');

            return redirect(route('cases.index'));
        }

        $this->caseRepository->delete($id);

        Flash::success('Case deleted successfully.');

        return redirect(route('cases.index'));
    }
}
