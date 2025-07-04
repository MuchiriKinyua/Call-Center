<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQueueRequest;
use App\Http\Requests\UpdateQueueRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\QueueRepository;
use Illuminate\Http\Request;
use Flash;

class QueueController extends AppBaseController
{
    /** @var QueueRepository $queueRepository*/
    private $queueRepository;

    public function __construct(QueueRepository $queueRepo)
    {
        $this->queueRepository = $queueRepo;
    }

    /**
     * Display a listing of the Queue.
     */
    public function index(Request $request)
    {
        $queues = $this->queueRepository->paginate(10);

        return view('queues.index')
            ->with('queues', $queues);
    }

    /**
     * Show the form for creating a new Queue.
     */
    public function create()
    {
        return view('queues.create');
    }

    /**
     * Store a newly created Queue in storage.
     */
    public function store(CreateQueueRequest $request)
    {
        $input = $request->all();

        $queue = $this->queueRepository->create($input);

        Flash::success('Queue saved successfully.');

        return redirect(route('queues.index'));
    }

    /**
     * Display the specified Queue.
     */
    public function show($id)
    {
        $queue = $this->queueRepository->find($id);

        if (empty($queue)) {
            Flash::error('Queue not found');

            return redirect(route('queues.index'));
        }

        return view('queues.show')->with('queue', $queue);
    }

    /**
     * Show the form for editing the specified Queue.
     */
    public function edit($id)
    {
        $queue = $this->queueRepository->find($id);

        if (empty($queue)) {
            Flash::error('Queue not found');

            return redirect(route('queues.index'));
        }

        return view('queues.edit')->with('queue', $queue);
    }

    /**
     * Update the specified Queue in storage.
     */
    public function update($id, UpdateQueueRequest $request)
    {
        $queue = $this->queueRepository->find($id);

        if (empty($queue)) {
            Flash::error('Queue not found');

            return redirect(route('queues.index'));
        }

        $queue = $this->queueRepository->update($request->all(), $id);

        Flash::success('Queue updated successfully.');

        return redirect(route('queues.index'));
    }

    /**
     * Remove the specified Queue from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $queue = $this->queueRepository->find($id);

        if (empty($queue)) {
            Flash::error('Queue not found');

            return redirect(route('queues.index'));
        }

        $this->queueRepository->delete($id);

        Flash::success('Queue deleted successfully.');

        return redirect(route('queues.index'));
    }
}
