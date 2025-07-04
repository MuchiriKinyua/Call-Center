<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCallRequest;
use App\Http\Requests\UpdateCallRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CallRepository;
use Illuminate\Http\Request;
use Flash;

class CallController extends AppBaseController
{
    /** @var CallRepository $callRepository*/
    private $callRepository;

    public function __construct(CallRepository $callRepo)
    {
        $this->callRepository = $callRepo;
    }

    /**
     * Display a listing of the Call.
     */
    public function index(Request $request)
    {
        $calls = $this->callRepository->paginate(10);

        return view('calls.index')
            ->with('calls', $calls);
    }

    /**
     * Show the form for creating a new Call.
     */
    public function create()
    {
        return view('calls.create');
    }

    /**
     * Store a newly created Call in storage.
     */
    public function store(CreateCallRequest $request)
    {
        $input = $request->all();

        $call = $this->callRepository->create($input);

        Flash::success('Call saved successfully.');

        return redirect(route('calls.index'));
    }

    /**
     * Display the specified Call.
     */
    public function show($id)
    {
        $call = $this->callRepository->find($id);

        if (empty($call)) {
            Flash::error('Call not found');

            return redirect(route('calls.index'));
        }

        return view('calls.show')->with('call', $call);
    }

    /**
     * Show the form for editing the specified Call.
     */
    public function edit($id)
    {
        $call = $this->callRepository->find($id);

        if (empty($call)) {
            Flash::error('Call not found');

            return redirect(route('calls.index'));
        }

        return view('calls.edit')->with('call', $call);
    }

    /**
     * Update the specified Call in storage.
     */
    public function update($id, UpdateCallRequest $request)
    {
        $call = $this->callRepository->find($id);

        if (empty($call)) {
            Flash::error('Call not found');

            return redirect(route('calls.index'));
        }

        $call = $this->callRepository->update($request->all(), $id);

        Flash::success('Call updated successfully.');

        return redirect(route('calls.index'));
    }

    /**
     * Remove the specified Call from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $call = $this->callRepository->find($id);

        if (empty($call)) {
            Flash::error('Call not found');

            return redirect(route('calls.index'));
        }

        $this->callRepository->delete($id);

        Flash::success('Call deleted successfully.');

        return redirect(route('calls.index'));
    }
}
