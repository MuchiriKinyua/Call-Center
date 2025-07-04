<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIvr_flowRequest;
use App\Http\Requests\UpdateIvr_flowRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Ivr_flowRepository;
use Illuminate\Http\Request;
use Flash;

class Ivr_flowController extends AppBaseController
{
    /** @var Ivr_flowRepository $ivrFlowRepository*/
    private $ivrFlowRepository;

    public function __construct(Ivr_flowRepository $ivrFlowRepo)
    {
        $this->ivrFlowRepository = $ivrFlowRepo;
    }

    /**
     * Display a listing of the Ivr_flow.
     */
    public function index(Request $request)
    {
        $ivrFlows = $this->ivrFlowRepository->paginate(10);

        return view('ivr_flows.index')
            ->with('ivrFlows', $ivrFlows);
    }

    /**
     * Show the form for creating a new Ivr_flow.
     */
    public function create()
    {
        return view('ivr_flows.create');
    }

    /**
     * Store a newly created Ivr_flow in storage.
     */
    public function store(CreateIvr_flowRequest $request)
    {
        $input = $request->all();

        $ivrFlow = $this->ivrFlowRepository->create($input);

        Flash::success('Ivr Flow saved successfully.');

        return redirect(route('ivrFlows.index'));
    }

    /**
     * Display the specified Ivr_flow.
     */
    public function show($id)
    {
        $ivrFlow = $this->ivrFlowRepository->find($id);

        if (empty($ivrFlow)) {
            Flash::error('Ivr Flow not found');

            return redirect(route('ivrFlows.index'));
        }

        return view('ivr_flows.show')->with('ivrFlow', $ivrFlow);
    }

    /**
     * Show the form for editing the specified Ivr_flow.
     */
    public function edit($id)
    {
        $ivrFlow = $this->ivrFlowRepository->find($id);

        if (empty($ivrFlow)) {
            Flash::error('Ivr Flow not found');

            return redirect(route('ivrFlows.index'));
        }

        return view('ivr_flows.edit')->with('ivrFlow', $ivrFlow);
    }

    /**
     * Update the specified Ivr_flow in storage.
     */
    public function update($id, UpdateIvr_flowRequest $request)
    {
        $ivrFlow = $this->ivrFlowRepository->find($id);

        if (empty($ivrFlow)) {
            Flash::error('Ivr Flow not found');

            return redirect(route('ivrFlows.index'));
        }

        $ivrFlow = $this->ivrFlowRepository->update($request->all(), $id);

        Flash::success('Ivr Flow updated successfully.');

        return redirect(route('ivrFlows.index'));
    }

    /**
     * Remove the specified Ivr_flow from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ivrFlow = $this->ivrFlowRepository->find($id);

        if (empty($ivrFlow)) {
            Flash::error('Ivr Flow not found');

            return redirect(route('ivrFlows.index'));
        }

        $this->ivrFlowRepository->delete($id);

        Flash::success('Ivr Flow deleted successfully.');

        return redirect(route('ivrFlows.index'));
    }
}
