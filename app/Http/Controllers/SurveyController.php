<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSurveyRequest;
use App\Http\Requests\UpdateSurveyRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SurveyRepository;
use Illuminate\Http\Request;
use Flash;

class SurveyController extends AppBaseController
{
    /** @var SurveyRepository $surveyRepository*/
    private $surveyRepository;

    public function __construct(SurveyRepository $surveyRepo)
    {
        $this->surveyRepository = $surveyRepo;
    }

    /**
     * Display a listing of the Survey.
     */
    public function index(Request $request)
    {
        $surveys = $this->surveyRepository->paginate(10);

        return view('surveys.index')
            ->with('surveys', $surveys);
    }

    /**
     * Show the form for creating a new Survey.
     */
    public function create()
    {
        return view('surveys.create');
    }

    /**
     * Store a newly created Survey in storage.
     */
    public function store(CreateSurveyRequest $request)
    {
        $input = $request->all();

        $survey = $this->surveyRepository->create($input);

        Flash::success('Survey saved successfully.');

        return redirect(route('surveys.index'));
    }

    /**
     * Display the specified Survey.
     */
    public function show($id)
    {
        $survey = $this->surveyRepository->find($id);

        if (empty($survey)) {
            Flash::error('Survey not found');

            return redirect(route('surveys.index'));
        }

        return view('surveys.show')->with('survey', $survey);
    }

    /**
     * Show the form for editing the specified Survey.
     */
    public function edit($id)
    {
        $survey = $this->surveyRepository->find($id);

        if (empty($survey)) {
            Flash::error('Survey not found');

            return redirect(route('surveys.index'));
        }

        return view('surveys.edit')->with('survey', $survey);
    }

    /**
     * Update the specified Survey in storage.
     */
    public function update($id, UpdateSurveyRequest $request)
    {
        $survey = $this->surveyRepository->find($id);

        if (empty($survey)) {
            Flash::error('Survey not found');

            return redirect(route('surveys.index'));
        }

        $survey = $this->surveyRepository->update($request->all(), $id);

        Flash::success('Survey updated successfully.');

        return redirect(route('surveys.index'));
    }

    /**
     * Remove the specified Survey from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $survey = $this->surveyRepository->find($id);

        if (empty($survey)) {
            Flash::error('Survey not found');

            return redirect(route('surveys.index'));
        }

        $this->surveyRepository->delete($id);

        Flash::success('Survey deleted successfully.');

        return redirect(route('surveys.index'));
    }
}
