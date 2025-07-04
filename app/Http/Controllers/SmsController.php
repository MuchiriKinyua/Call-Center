<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSmsRequest;
use App\Http\Requests\UpdateSmsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SmsRepository;
use Illuminate\Http\Request;
use Flash;

class SmsController extends AppBaseController
{
    /** @var SmsRepository $smsRepository*/
    private $smsRepository;

    public function __construct(SmsRepository $smsRepo)
    {
        $this->smsRepository = $smsRepo;
    }

    /**
     * Display a listing of the Sms.
     */
    public function index(Request $request)
    {
        $sms = $this->smsRepository->paginate(10);

        return view('sms.index')
            ->with('sms', $sms);
    }

    /**
     * Show the form for creating a new Sms.
     */
    public function create()
    {
        return view('sms.create');
    }

    /**
     * Store a newly created Sms in storage.
     */
    public function store(CreateSmsRequest $request)
    {
        $input = $request->all();

        $sms = $this->smsRepository->create($input);

        Flash::success('Sms saved successfully.');

        return redirect(route('sms.index'));
    }

    /**
     * Display the specified Sms.
     */
    public function show($id)
    {
        $sms = $this->smsRepository->find($id);

        if (empty($sms)) {
            Flash::error('Sms not found');

            return redirect(route('sms.index'));
        }

        return view('sms.show')->with('sms', $sms);
    }

    /**
     * Show the form for editing the specified Sms.
     */
    public function edit($id)
    {
        $sms = $this->smsRepository->find($id);

        if (empty($sms)) {
            Flash::error('Sms not found');

            return redirect(route('sms.index'));
        }

        return view('sms.edit')->with('sms', $sms);
    }

    /**
     * Update the specified Sms in storage.
     */
    public function update($id, UpdateSmsRequest $request)
    {
        $sms = $this->smsRepository->find($id);

        if (empty($sms)) {
            Flash::error('Sms not found');

            return redirect(route('sms.index'));
        }

        $sms = $this->smsRepository->update($request->all(), $id);

        Flash::success('Sms updated successfully.');

        return redirect(route('sms.index'));
    }

    /**
     * Remove the specified Sms from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sms = $this->smsRepository->find($id);

        if (empty($sms)) {
            Flash::error('Sms not found');

            return redirect(route('sms.index'));
        }

        $this->smsRepository->delete($id);

        Flash::success('Sms deleted successfully.');

        return redirect(route('sms.index'));
    }
}
