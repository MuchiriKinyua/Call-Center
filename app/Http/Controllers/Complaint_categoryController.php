<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateComplaint_categoryRequest;
use App\Http\Requests\UpdateComplaint_categoryRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Complaint_categoryRepository;
use Illuminate\Http\Request;
use Flash;

class Complaint_categoryController extends AppBaseController
{
    /** @var Complaint_categoryRepository $complaintCategoryRepository*/
    private $complaintCategoryRepository;

    public function __construct(Complaint_categoryRepository $complaintCategoryRepo)
    {
        $this->complaintCategoryRepository = $complaintCategoryRepo;
    }

    /**
     * Display a listing of the Complaint_category.
     */
    public function index(Request $request)
    {
        $complaintCategories = $this->complaintCategoryRepository->paginate(10);

        return view('complaint_categories.index')
            ->with('complaintCategories', $complaintCategories);
    }

    /**
     * Show the form for creating a new Complaint_category.
     */
    public function create()
    {
        return view('complaint_categories.create');
    }

    /**
     * Store a newly created Complaint_category in storage.
     */
    public function store(CreateComplaint_categoryRequest $request)
    {
        $input = $request->all();

        $complaintCategory = $this->complaintCategoryRepository->create($input);

        Flash::success('Complaint Category saved successfully.');

        return redirect(route('complaintCategories.index'));
    }

    /**
     * Display the specified Complaint_category.
     */
    public function show($id)
    {
        $complaintCategory = $this->complaintCategoryRepository->find($id);

        if (empty($complaintCategory)) {
            Flash::error('Complaint Category not found');

            return redirect(route('complaintCategories.index'));
        }

        return view('complaint_categories.show')->with('complaintCategory', $complaintCategory);
    }

    /**
     * Show the form for editing the specified Complaint_category.
     */
    public function edit($id)
    {
        $complaintCategory = $this->complaintCategoryRepository->find($id);

        if (empty($complaintCategory)) {
            Flash::error('Complaint Category not found');

            return redirect(route('complaintCategories.index'));
        }

        return view('complaint_categories.edit')->with('complaintCategory', $complaintCategory);
    }

    /**
     * Update the specified Complaint_category in storage.
     */
    public function update($id, UpdateComplaint_categoryRequest $request)
    {
        $complaintCategory = $this->complaintCategoryRepository->find($id);

        if (empty($complaintCategory)) {
            Flash::error('Complaint Category not found');

            return redirect(route('complaintCategories.index'));
        }

        $complaintCategory = $this->complaintCategoryRepository->update($request->all(), $id);

        Flash::success('Complaint Category updated successfully.');

        return redirect(route('complaintCategories.index'));
    }

    /**
     * Remove the specified Complaint_category from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $complaintCategory = $this->complaintCategoryRepository->find($id);

        if (empty($complaintCategory)) {
            Flash::error('Complaint Category not found');

            return redirect(route('complaintCategories.index'));
        }

        $this->complaintCategoryRepository->delete($id);

        Flash::success('Complaint Category deleted successfully.');

        return redirect(route('complaintCategories.index'));
    }
}
