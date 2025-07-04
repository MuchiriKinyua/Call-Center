<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSentiment_analysisRequest;
use App\Http\Requests\UpdateSentiment_analysisRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Sentiment_analysisRepository;
use Illuminate\Http\Request;
use Flash;

class Sentiment_analysisController extends AppBaseController
{
    /** @var Sentiment_analysisRepository $sentimentAnalysisRepository*/
    private $sentimentAnalysisRepository;

    public function __construct(Sentiment_analysisRepository $sentimentAnalysisRepo)
    {
        $this->sentimentAnalysisRepository = $sentimentAnalysisRepo;
    }

    /**
     * Display a listing of the Sentiment_analysis.
     */
    public function index(Request $request)
    {
        $sentimentAnalyses = $this->sentimentAnalysisRepository->paginate(10);

        return view('sentiment_analyses.index')
            ->with('sentimentAnalyses', $sentimentAnalyses);
    }

    /**
     * Show the form for creating a new Sentiment_analysis.
     */
    public function create()
    {
        return view('sentiment_analyses.create');
    }

    /**
     * Store a newly created Sentiment_analysis in storage.
     */
    public function store(CreateSentiment_analysisRequest $request)
    {
        $input = $request->all();

        $sentimentAnalysis = $this->sentimentAnalysisRepository->create($input);

        Flash::success('Sentiment Analysis saved successfully.');

        return redirect(route('sentimentAnalyses.index'));
    }

    /**
     * Display the specified Sentiment_analysis.
     */
    public function show($id)
    {
        $sentimentAnalysis = $this->sentimentAnalysisRepository->find($id);

        if (empty($sentimentAnalysis)) {
            Flash::error('Sentiment Analysis not found');

            return redirect(route('sentimentAnalyses.index'));
        }

        return view('sentiment_analyses.show')->with('sentimentAnalysis', $sentimentAnalysis);
    }

    /**
     * Show the form for editing the specified Sentiment_analysis.
     */
    public function edit($id)
    {
        $sentimentAnalysis = $this->sentimentAnalysisRepository->find($id);

        if (empty($sentimentAnalysis)) {
            Flash::error('Sentiment Analysis not found');

            return redirect(route('sentimentAnalyses.index'));
        }

        return view('sentiment_analyses.edit')->with('sentimentAnalysis', $sentimentAnalysis);
    }

    /**
     * Update the specified Sentiment_analysis in storage.
     */
    public function update($id, UpdateSentiment_analysisRequest $request)
    {
        $sentimentAnalysis = $this->sentimentAnalysisRepository->find($id);

        if (empty($sentimentAnalysis)) {
            Flash::error('Sentiment Analysis not found');

            return redirect(route('sentimentAnalyses.index'));
        }

        $sentimentAnalysis = $this->sentimentAnalysisRepository->update($request->all(), $id);

        Flash::success('Sentiment Analysis updated successfully.');

        return redirect(route('sentimentAnalyses.index'));
    }

    /**
     * Remove the specified Sentiment_analysis from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sentimentAnalysis = $this->sentimentAnalysisRepository->find($id);

        if (empty($sentimentAnalysis)) {
            Flash::error('Sentiment Analysis not found');

            return redirect(route('sentimentAnalyses.index'));
        }

        $this->sentimentAnalysisRepository->delete($id);

        Flash::success('Sentiment Analysis deleted successfully.');

        return redirect(route('sentimentAnalyses.index'));
    }
}
