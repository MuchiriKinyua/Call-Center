<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCrm_settingRequest;
use App\Http\Requests\UpdateCrm_settingRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Crm_settingRepository;
use Illuminate\Http\Request;
use Flash;

class Crm_settingController extends AppBaseController
{
    /** @var Crm_settingRepository $crmSettingRepository*/
    private $crmSettingRepository;

    public function __construct(Crm_settingRepository $crmSettingRepo)
    {
        $this->crmSettingRepository = $crmSettingRepo;
    }

    /**
     * Display a listing of the Crm_setting.
     */
    public function index(Request $request)
    {
        $crmSettings = $this->crmSettingRepository->paginate(10);

        return view('crm_settings.index')
            ->with('crmSettings', $crmSettings);
    }

    /**
     * Show the form for creating a new Crm_setting.
     */
    public function create()
    {
        return view('crm_settings.create');
    }

    /**
     * Store a newly created Crm_setting in storage.
     */
    public function store(CreateCrm_settingRequest $request)
    {
        $input = $request->all();

        $crmSetting = $this->crmSettingRepository->create($input);

        Flash::success('Crm Setting saved successfully.');

        return redirect(route('crmSettings.index'));
    }

    /**
     * Display the specified Crm_setting.
     */
    public function show($id)
    {
        $crmSetting = $this->crmSettingRepository->find($id);

        if (empty($crmSetting)) {
            Flash::error('Crm Setting not found');

            return redirect(route('crmSettings.index'));
        }

        return view('crm_settings.show')->with('crmSetting', $crmSetting);
    }

    /**
     * Show the form for editing the specified Crm_setting.
     */
    public function edit($id)
    {
        $crmSetting = $this->crmSettingRepository->find($id);

        if (empty($crmSetting)) {
            Flash::error('Crm Setting not found');

            return redirect(route('crmSettings.index'));
        }

        return view('crm_settings.edit')->with('crmSetting', $crmSetting);
    }

    /**
     * Update the specified Crm_setting in storage.
     */
    public function update($id, UpdateCrm_settingRequest $request)
    {
        $crmSetting = $this->crmSettingRepository->find($id);

        if (empty($crmSetting)) {
            Flash::error('Crm Setting not found');

            return redirect(route('crmSettings.index'));
        }

        $crmSetting = $this->crmSettingRepository->update($request->all(), $id);

        Flash::success('Crm Setting updated successfully.');

        return redirect(route('crmSettings.index'));
    }

    /**
     * Remove the specified Crm_setting from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $crmSetting = $this->crmSettingRepository->find($id);

        if (empty($crmSetting)) {
            Flash::error('Crm Setting not found');

            return redirect(route('crmSettings.index'));
        }

        $this->crmSettingRepository->delete($id);

        Flash::success('Crm Setting deleted successfully.');

        return redirect(route('crmSettings.index'));
    }
}
