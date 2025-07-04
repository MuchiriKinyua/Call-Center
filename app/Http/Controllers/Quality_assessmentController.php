<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuality_assessmentRequest;
use App\Http\Requests\UpdateQuality_assessmentRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Quality_assessmentRepository;
use Illuminate\Http\Request;
use Flash;

class Quality_assessmentController extends AppBaseController
{
    /** @var Quality_assessmentRepository $qualityAssessmentRepository*/
    private $qualityAssessmentRepository;

    public function __construct(Quality_assessmentRepository $qualityAssessmentRepo)
    {
        $this->qualityAssessmentRepository = $qualityAssessmentRepo;
    }

    /**
     * Display a listing of the Quality_assessment.
     */
    public function index(Request $request)
    {
        $qualityAssessments = $this->qualityAssessmentRepository->paginate(10);

        return view('quality_assessments.index')
            ->with('qualityAssessments', $qualityAssessments);
    }

    /**
     * Show the form for creating a new Quality_assessment.
     */
    public function create()
    {
        return view('quality_assessments.create');
    }

    /**
     * Store a newly created Quality_assessment in storage.
     */
    public function store(CreateQuality_assessmentRequest $request)
    {
        $input = $request->all();

        $qualityAssessment = $this->qualityAssessmentRepository->create($input);

        Flash::success('Quality Assessment saved successfully.');

        return redirect(route('qualityAssessments.index'));
    }

    /**
     * Display the specified Quality_assessment.
     */
    public function show($id)
    {
        $qualityAssessment = $this->qualityAssessmentRepository->find($id);

        if (empty($qualityAssessment)) {
            Flash::error('Quality Assessment not found');

            return redirect(route('qualityAssessments.index'));
        }

        return view('quality_assessments.show')->with('qualityAssessment', $qualityAssessment);
    }

    /**
     * Show the form for editing the specified Quality_assessment.
     */
    public function edit($id)
    {
        $qualityAssessment = $this->qualityAssessmentRepository->find($id);

        if (empty($qualityAssessment)) {
            Flash::error('Quality Assessment not found');

            return redirect(route('qualityAssessments.index'));
        }

        return view('quality_assessments.edit')->with('qualityAssessment', $qualityAssessment);
    }

    /**
     * Update the specified Quality_assessment in storage.
     */
    public function update($id, UpdateQuality_assessmentRequest $request)
    {
        $qualityAssessment = $this->qualityAssessmentRepository->find($id);

        if (empty($qualityAssessment)) {
            Flash::error('Quality Assessment not found');

            return redirect(route('qualityAssessments.index'));
        }

        $qualityAssessment = $this->qualityAssessmentRepository->update($request->all(), $id);

        Flash::success('Quality Assessment updated successfully.');

        return redirect(route('qualityAssessments.index'));
    }

    /**
     * Remove the specified Quality_assessment from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $qualityAssessment = $this->qualityAssessmentRepository->find($id);

        if (empty($qualityAssessment)) {
            Flash::error('Quality Assessment not found');

            return redirect(route('qualityAssessments.index'));
        }

        $this->qualityAssessmentRepository->delete($id);

        Flash::success('Quality Assessment deleted successfully.');

        return redirect(route('qualityAssessments.index'));
    }
}
