<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomer_feedbackRequest;
use App\Http\Requests\UpdateCustomer_feedbackRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Customer_feedbackRepository;
use Illuminate\Http\Request;
use Flash;

class Customer_feedbackController extends AppBaseController
{
    /** @var Customer_feedbackRepository $customerFeedbackRepository*/
    private $customerFeedbackRepository;

    public function __construct(Customer_feedbackRepository $customerFeedbackRepo)
    {
        $this->customerFeedbackRepository = $customerFeedbackRepo;
    }

    /**
     * Display a listing of the Customer_feedback.
     */
    public function index(Request $request)
    {
        $customerFeedbacks = $this->customerFeedbackRepository->paginate(10);

        return view('customer_feedbacks.index')
            ->with('customerFeedbacks', $customerFeedbacks);
    }

    /**
     * Show the form for creating a new Customer_feedback.
     */
    public function create()
    {
        return view('customer_feedbacks.create');
    }

    /**
     * Store a newly created Customer_feedback in storage.
     */
    public function store(CreateCustomer_feedbackRequest $request)
    {
        $input = $request->all();

        $customerFeedback = $this->customerFeedbackRepository->create($input);

        Flash::success('Customer Feedback saved successfully.');

        return redirect(route('customerFeedbacks.index'));
    }

    /**
     * Display the specified Customer_feedback.
     */
    public function show($id)
    {
        $customerFeedback = $this->customerFeedbackRepository->find($id);

        if (empty($customerFeedback)) {
            Flash::error('Customer Feedback not found');

            return redirect(route('customerFeedbacks.index'));
        }

        return view('customer_feedbacks.show')->with('customerFeedback', $customerFeedback);
    }

    /**
     * Show the form for editing the specified Customer_feedback.
     */
    public function edit($id)
    {
        $customerFeedback = $this->customerFeedbackRepository->find($id);

        if (empty($customerFeedback)) {
            Flash::error('Customer Feedback not found');

            return redirect(route('customerFeedbacks.index'));
        }

        return view('customer_feedbacks.edit')->with('customerFeedback', $customerFeedback);
    }

    /**
     * Update the specified Customer_feedback in storage.
     */
    public function update($id, UpdateCustomer_feedbackRequest $request)
    {
        $customerFeedback = $this->customerFeedbackRepository->find($id);

        if (empty($customerFeedback)) {
            Flash::error('Customer Feedback not found');

            return redirect(route('customerFeedbacks.index'));
        }

        $customerFeedback = $this->customerFeedbackRepository->update($request->all(), $id);

        Flash::success('Customer Feedback updated successfully.');

        return redirect(route('customerFeedbacks.index'));
    }

    /**
     * Remove the specified Customer_feedback from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $customerFeedback = $this->customerFeedbackRepository->find($id);

        if (empty($customerFeedback)) {
            Flash::error('Customer Feedback not found');

            return redirect(route('customerFeedbacks.index'));
        }

        $this->customerFeedbackRepository->delete($id);

        Flash::success('Customer Feedback deleted successfully.');

        return redirect(route('customerFeedbacks.index'));
    }
}
