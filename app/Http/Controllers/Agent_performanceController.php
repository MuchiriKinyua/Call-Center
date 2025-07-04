<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAgent_performanceRequest;
use App\Http\Requests\UpdateAgent_performanceRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Agent_performanceRepository;
use Illuminate\Http\Request;
use Flash;

class Agent_performanceController extends AppBaseController
{
    /** @var Agent_performanceRepository $agentPerformanceRepository*/
    private $agentPerformanceRepository;

    public function __construct(Agent_performanceRepository $agentPerformanceRepo)
    {
        $this->agentPerformanceRepository = $agentPerformanceRepo;
    }

    /**
     * Display a listing of the Agent_performance.
     */
    public function index(Request $request)
    {
        $agentPerformances = $this->agentPerformanceRepository->paginate(10);

        return view('agent_performances.index')
            ->with('agentPerformances', $agentPerformances);
    }

    /**
     * Show the form for creating a new Agent_performance.
     */
    public function create()
    {
        return view('agent_performances.create');
    }

    /**
     * Store a newly created Agent_performance in storage.
     */
    public function store(CreateAgent_performanceRequest $request)
    {
        $input = $request->all();

        $agentPerformance = $this->agentPerformanceRepository->create($input);

        Flash::success('Agent Performance saved successfully.');

        return redirect(route('agentPerformances.index'));
    }

    /**
     * Display the specified Agent_performance.
     */
    public function show($id)
    {
        $agentPerformance = $this->agentPerformanceRepository->find($id);

        if (empty($agentPerformance)) {
            Flash::error('Agent Performance not found');

            return redirect(route('agentPerformances.index'));
        }

        return view('agent_performances.show')->with('agentPerformance', $agentPerformance);
    }

    /**
     * Show the form for editing the specified Agent_performance.
     */
    public function edit($id)
    {
        $agentPerformance = $this->agentPerformanceRepository->find($id);

        if (empty($agentPerformance)) {
            Flash::error('Agent Performance not found');

            return redirect(route('agentPerformances.index'));
        }

        return view('agent_performances.edit')->with('agentPerformance', $agentPerformance);
    }

    /**
     * Update the specified Agent_performance in storage.
     */
    public function update($id, UpdateAgent_performanceRequest $request)
    {
        $agentPerformance = $this->agentPerformanceRepository->find($id);

        if (empty($agentPerformance)) {
            Flash::error('Agent Performance not found');

            return redirect(route('agentPerformances.index'));
        }

        $agentPerformance = $this->agentPerformanceRepository->update($request->all(), $id);

        Flash::success('Agent Performance updated successfully.');

        return redirect(route('agentPerformances.index'));
    }

    /**
     * Remove the specified Agent_performance from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $agentPerformance = $this->agentPerformanceRepository->find($id);

        if (empty($agentPerformance)) {
            Flash::error('Agent Performance not found');

            return redirect(route('agentPerformances.index'));
        }

        $this->agentPerformanceRepository->delete($id);

        Flash::success('Agent Performance deleted successfully.');

        return redirect(route('agentPerformances.index'));
    }
}
