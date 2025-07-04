<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDialerRequest;
use App\Http\Requests\UpdateDialerRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\DialerRepository;
use Illuminate\Http\Request;
use Flash;

class DialerController extends AppBaseController
{
    /** @var DialerRepository $dialerRepository*/
    private $dialerRepository;

    public function __construct(DialerRepository $dialerRepo)
    {
        $this->dialerRepository = $dialerRepo;
    }

    /**
     * Display a listing of the Dialer.
     */
    public function index(Request $request)
    {
        $dialers = $this->dialerRepository->paginate(10);

        return view('dialers.index')
            ->with('dialers', $dialers);
    }

    /**
     * Show the form for creating a new Dialer.
     */
    public function create()
    {
        return view('dialers.create');
    }

    /**
     * Store a newly created Dialer in storage.
     */
    public function store(CreateDialerRequest $request)
    {
        $input = $request->all();

        $dialer = $this->dialerRepository->create($input);

        Flash::success('Dialer saved successfully.');

        return redirect(route('dialers.index'));
    }

    /**
     * Display the specified Dialer.
     */
    public function show($id)
    {
        $dialer = $this->dialerRepository->find($id);

        if (empty($dialer)) {
            Flash::error('Dialer not found');

            return redirect(route('dialers.index'));
        }

        return view('dialers.show')->with('dialer', $dialer);
    }

    /**
     * Show the form for editing the specified Dialer.
     */
    public function edit($id)
    {
        $dialer = $this->dialerRepository->find($id);

        if (empty($dialer)) {
            Flash::error('Dialer not found');

            return redirect(route('dialers.index'));
        }

        return view('dialers.edit')->with('dialer', $dialer);
    }

    /**
     * Update the specified Dialer in storage.
     */
    public function update($id, UpdateDialerRequest $request)
    {
        $dialer = $this->dialerRepository->find($id);

        if (empty($dialer)) {
            Flash::error('Dialer not found');

            return redirect(route('dialers.index'));
        }

        $dialer = $this->dialerRepository->update($request->all(), $id);

        Flash::success('Dialer updated successfully.');

        return redirect(route('dialers.index'));
    }

    /**
     * Remove the specified Dialer from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dialer = $this->dialerRepository->find($id);

        if (empty($dialer)) {
            Flash::error('Dialer not found');

            return redirect(route('dialers.index'));
        }

        $this->dialerRepository->delete($id);

        Flash::success('Dialer deleted successfully.');

        return redirect(route('dialers.index'));
    }
}
