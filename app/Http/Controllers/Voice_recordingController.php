<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVoice_recordingRequest;
use App\Http\Requests\UpdateVoice_recordingRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Voice_recordingRepository;
use Illuminate\Http\Request;
use Flash;

class Voice_recordingController extends AppBaseController
{
    /** @var Voice_recordingRepository $voiceRecordingRepository*/
    private $voiceRecordingRepository;

    public function __construct(Voice_recordingRepository $voiceRecordingRepo)
    {
        $this->voiceRecordingRepository = $voiceRecordingRepo;
    }

    /**
     * Display a listing of the Voice_recording.
     */
    public function index(Request $request)
    {
        $voiceRecordings = $this->voiceRecordingRepository->paginate(10);

        return view('voice_recordings.index')
            ->with('voiceRecordings', $voiceRecordings);
    }

    /**
     * Show the form for creating a new Voice_recording.
     */
    public function create()
    {
        return view('voice_recordings.create');
    }

    /**
     * Store a newly created Voice_recording in storage.
     */
    public function store(CreateVoice_recordingRequest $request)
    {
        $input = $request->all();

        $voiceRecording = $this->voiceRecordingRepository->create($input);

        Flash::success('Voice Recording saved successfully.');

        return redirect(route('voiceRecordings.index'));
    }

    /**
     * Display the specified Voice_recording.
     */
    public function show($id)
    {
        $voiceRecording = $this->voiceRecordingRepository->find($id);

        if (empty($voiceRecording)) {
            Flash::error('Voice Recording not found');

            return redirect(route('voiceRecordings.index'));
        }

        return view('voice_recordings.show')->with('voiceRecording', $voiceRecording);
    }

    /**
     * Show the form for editing the specified Voice_recording.
     */
    public function edit($id)
    {
        $voiceRecording = $this->voiceRecordingRepository->find($id);

        if (empty($voiceRecording)) {
            Flash::error('Voice Recording not found');

            return redirect(route('voiceRecordings.index'));
        }

        return view('voice_recordings.edit')->with('voiceRecording', $voiceRecording);
    }

    /**
     * Update the specified Voice_recording in storage.
     */
    public function update($id, UpdateVoice_recordingRequest $request)
    {
        $voiceRecording = $this->voiceRecordingRepository->find($id);

        if (empty($voiceRecording)) {
            Flash::error('Voice Recording not found');

            return redirect(route('voiceRecordings.index'));
        }

        $voiceRecording = $this->voiceRecordingRepository->update($request->all(), $id);

        Flash::success('Voice Recording updated successfully.');

        return redirect(route('voiceRecordings.index'));
    }

    /**
     * Remove the specified Voice_recording from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $voiceRecording = $this->voiceRecordingRepository->find($id);

        if (empty($voiceRecording)) {
            Flash::error('Voice Recording not found');

            return redirect(route('voiceRecordings.index'));
        }

        $this->voiceRecordingRepository->delete($id);

        Flash::success('Voice Recording deleted successfully.');

        return redirect(route('voiceRecordings.index'));
    }
}
