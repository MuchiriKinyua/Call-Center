<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomer_caseRequest;
use App\Http\Requests\UpdateCustomer_caseRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Customer_caseRepository;
use Illuminate\Http\Request;
use Flash;

class Customer_caseController extends AppBaseController
{
    /** @var Customer_caseRepository $customerCaseRepository*/
    private $customerCaseRepository;

    public function __construct(Customer_caseRepository $customerCaseRepo)
    {
        $this->customerCaseRepository = $customerCaseRepo;
    }

    /**
     * Display a listing of the Customer_case.
     */
    public function index(Request $request)
    {
        $customerCases = $this->customerCaseRepository->paginate(10);

        return view('customer_cases.index')
            ->with('customerCases', $customerCases);
    }

    /**
     * Show the form for creating a new Customer_case.
     */
    public function create()
    {
        return view('customer_cases.create');
    }

    /**
     * Store a newly created Customer_case in storage.
     */
    public function store(CreateCustomer_caseRequest $request)
    {
        $input = $request->all();

        $customerCase = $this->customerCaseRepository->create($input);

        Flash::success('Customer Case saved successfully.');

        return redirect(route('customerCases.index'));
    }

    /**
     * Display the specified Customer_case.
     */
    public function show($id)
    {
        $customerCase = $this->customerCaseRepository->find($id);

        if (empty($customerCase)) {
            Flash::error('Customer Case not found');

            return redirect(route('customerCases.index'));
        }

        return view('customer_cases.show')->with('customerCase', $customerCase);
    }

    /**
     * Show the form for editing the specified Customer_case.
     */
    public function edit($id)
    {
        $customerCase = $this->customerCaseRepository->find($id);

        if (empty($customerCase)) {
            Flash::error('Customer Case not found');

            return redirect(route('customerCases.index'));
        }

        return view('customer_cases.edit')->with('customerCase', $customerCase);
    }

    /**
     * Update the specified Customer_case in storage.
     */
    public function update($id, UpdateCustomer_caseRequest $request)
    {
        $customerCase = $this->customerCaseRepository->find($id);

        if (empty($customerCase)) {
            Flash::error('Customer Case not found');

            return redirect(route('customerCases.index'));
        }

        $customerCase = $this->customerCaseRepository->update($request->all(), $id);

        Flash::success('Customer Case updated successfully.');

        return redirect(route('customerCases.index'));
    }

    /**
     * Remove the specified Customer_case from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $customerCase = $this->customerCaseRepository->find($id);

        if (empty($customerCase)) {
            Flash::error('Customer Case not found');

            return redirect(route('customerCases.index'));
        }

        $this->customerCaseRepository->delete($id);

        Flash::success('Customer Case deleted successfully.');

        return redirect(route('customerCases.index'));
    }
}
