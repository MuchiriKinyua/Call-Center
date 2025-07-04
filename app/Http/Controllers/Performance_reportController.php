<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePerformance_reportRequest;
use App\Http\Requests\UpdatePerformance_reportRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Performance_reportRepository;
use Illuminate\Http\Request;
use Flash;

class Performance_reportController extends AppBaseController
{
    /** @var Performance_reportRepository $performanceReportRepository*/
    private $performanceReportRepository;

    public function __construct(Performance_reportRepository $performanceReportRepo)
    {
        $this->performanceReportRepository = $performanceReportRepo;
    }

    /**
     * Display a listing of the Performance_report.
     */
    public function index(Request $request)
    {
        $performanceReports = $this->performanceReportRepository->paginate(10);

        return view('performance_reports.index')
            ->with('performanceReports', $performanceReports);
    }

    /**
     * Show the form for creating a new Performance_report.
     */
    public function create()
    {
        return view('performance_reports.create');
    }

    /**
     * Store a newly created Performance_report in storage.
     */
    public function store(CreatePerformance_reportRequest $request)
    {
        $input = $request->all();

        $performanceReport = $this->performanceReportRepository->create($input);

        Flash::success('Performance Report saved successfully.');

        return redirect(route('performanceReports.index'));
    }

    /**
     * Display the specified Performance_report.
     */
    public function show($id)
    {
        $performanceReport = $this->performanceReportRepository->find($id);

        if (empty($performanceReport)) {
            Flash::error('Performance Report not found');

            return redirect(route('performanceReports.index'));
        }

        return view('performance_reports.show')->with('performanceReport', $performanceReport);
    }

    /**
     * Show the form for editing the specified Performance_report.
     */
    public function edit($id)
    {
        $performanceReport = $this->performanceReportRepository->find($id);

        if (empty($performanceReport)) {
            Flash::error('Performance Report not found');

            return redirect(route('performanceReports.index'));
        }

        return view('performance_reports.edit')->with('performanceReport', $performanceReport);
    }

    /**
     * Update the specified Performance_report in storage.
     */
    public function update($id, UpdatePerformance_reportRequest $request)
    {
        $performanceReport = $this->performanceReportRepository->find($id);

        if (empty($performanceReport)) {
            Flash::error('Performance Report not found');

            return redirect(route('performanceReports.index'));
        }

        $performanceReport = $this->performanceReportRepository->update($request->all(), $id);

        Flash::success('Performance Report updated successfully.');

        return redirect(route('performanceReports.index'));
    }

    /**
     * Remove the specified Performance_report from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $performanceReport = $this->performanceReportRepository->find($id);

        if (empty($performanceReport)) {
            Flash::error('Performance Report not found');

            return redirect(route('performanceReports.index'));
        }

        $this->performanceReportRepository->delete($id);

        Flash::success('Performance Report deleted successfully.');

        return redirect(route('performanceReports.index'));
    }
}
