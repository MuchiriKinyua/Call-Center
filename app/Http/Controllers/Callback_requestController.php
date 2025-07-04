<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCallback_requestRequest;
use App\Http\Requests\UpdateCallback_requestRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Callback_requestRepository;
use Illuminate\Http\Request;
use Flash;

class Callback_requestController extends AppBaseController
{
    /** @var Callback_requestRepository $callbackRequestRepository*/
    private $callbackRequestRepository;

    public function __construct(Callback_requestRepository $callbackRequestRepo)
    {
        $this->callbackRequestRepository = $callbackRequestRepo;
    }

    /**
     * Display a listing of the Callback_request.
     */
    public function index(Request $request)
    {
        $callbackRequests = $this->callbackRequestRepository->paginate(10);

        return view('callback_requests.index')
            ->with('callbackRequests', $callbackRequests);
    }

    /**
     * Show the form for creating a new Callback_request.
     */
    public function create()
    {
        return view('callback_requests.create');
    }

    /**
     * Store a newly created Callback_request in storage.
     */
    public function store(CreateCallback_requestRequest $request)
    {
        $input = $request->all();

        $callbackRequest = $this->callbackRequestRepository->create($input);

        Flash::success('Callback Request saved successfully.');

        return redirect(route('callbackRequests.index'));
    }

    /**
     * Display the specified Callback_request.
     */
    public function show($id)
    {
        $callbackRequest = $this->callbackRequestRepository->find($id);

        if (empty($callbackRequest)) {
            Flash::error('Callback Request not found');

            return redirect(route('callbackRequests.index'));
        }

        return view('callback_requests.show')->with('callbackRequest', $callbackRequest);
    }

    /**
     * Show the form for editing the specified Callback_request.
     */
    public function edit($id)
    {
        $callbackRequest = $this->callbackRequestRepository->find($id);

        if (empty($callbackRequest)) {
            Flash::error('Callback Request not found');

            return redirect(route('callbackRequests.index'));
        }

        return view('callback_requests.edit')->with('callbackRequest', $callbackRequest);
    }

    /**
     * Update the specified Callback_request in storage.
     */
    public function update($id, UpdateCallback_requestRequest $request)
    {
        $callbackRequest = $this->callbackRequestRepository->find($id);

        if (empty($callbackRequest)) {
            Flash::error('Callback Request not found');

            return redirect(route('callbackRequests.index'));
        }

        $callbackRequest = $this->callbackRequestRepository->update($request->all(), $id);

        Flash::success('Callback Request updated successfully.');

        return redirect(route('callbackRequests.index'));
    }

    /**
     * Remove the specified Callback_request from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $callbackRequest = $this->callbackRequestRepository->find($id);

        if (empty($callbackRequest)) {
            Flash::error('Callback Request not found');

            return redirect(route('callbackRequests.index'));
        }

        $this->callbackRequestRepository->delete($id);

        Flash::success('Callback Request deleted successfully.');

        return redirect(route('callbackRequests.index'));
    }
}
