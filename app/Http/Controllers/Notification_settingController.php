<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNotification_settingRequest;
use App\Http\Requests\UpdateNotification_settingRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Notification_settingRepository;
use Illuminate\Http\Request;
use Flash;

class Notification_settingController extends AppBaseController
{
    /** @var Notification_settingRepository $notificationSettingRepository*/
    private $notificationSettingRepository;

    public function __construct(Notification_settingRepository $notificationSettingRepo)
    {
        $this->notificationSettingRepository = $notificationSettingRepo;
    }

    /**
     * Display a listing of the Notification_setting.
     */
    public function index(Request $request)
    {
        $notificationSettings = $this->notificationSettingRepository->paginate(10);

        return view('notification_settings.index')
            ->with('notificationSettings', $notificationSettings);
    }

    /**
     * Show the form for creating a new Notification_setting.
     */
    public function create()
    {
        return view('notification_settings.create');
    }

    /**
     * Store a newly created Notification_setting in storage.
     */
    public function store(CreateNotification_settingRequest $request)
    {
        $input = $request->all();

        $notificationSetting = $this->notificationSettingRepository->create($input);

        Flash::success('Notification Setting saved successfully.');

        return redirect(route('notificationSettings.index'));
    }

    /**
     * Display the specified Notification_setting.
     */
    public function show($id)
    {
        $notificationSetting = $this->notificationSettingRepository->find($id);

        if (empty($notificationSetting)) {
            Flash::error('Notification Setting not found');

            return redirect(route('notificationSettings.index'));
        }

        return view('notification_settings.show')->with('notificationSetting', $notificationSetting);
    }

    /**
     * Show the form for editing the specified Notification_setting.
     */
    public function edit($id)
    {
        $notificationSetting = $this->notificationSettingRepository->find($id);

        if (empty($notificationSetting)) {
            Flash::error('Notification Setting not found');

            return redirect(route('notificationSettings.index'));
        }

        return view('notification_settings.edit')->with('notificationSetting', $notificationSetting);
    }

    /**
     * Update the specified Notification_setting in storage.
     */
    public function update($id, UpdateNotification_settingRequest $request)
    {
        $notificationSetting = $this->notificationSettingRepository->find($id);

        if (empty($notificationSetting)) {
            Flash::error('Notification Setting not found');

            return redirect(route('notificationSettings.index'));
        }

        $notificationSetting = $this->notificationSettingRepository->update($request->all(), $id);

        Flash::success('Notification Setting updated successfully.');

        return redirect(route('notificationSettings.index'));
    }

    /**
     * Remove the specified Notification_setting from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $notificationSetting = $this->notificationSettingRepository->find($id);

        if (empty($notificationSetting)) {
            Flash::error('Notification Setting not found');

            return redirect(route('notificationSettings.index'));
        }

        $this->notificationSettingRepository->delete($id);

        Flash::success('Notification Setting deleted successfully.');

        return redirect(route('notificationSettings.index'));
    }
}
