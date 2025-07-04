<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Customer_case;
use App\Models\Chat;
use App\Models\Email;
use App\Models\Customer_feedback;
use App\Models\Survey;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalCustomers = Customer::count();
        $totalCustomer_cases = Customer_case::count();
        $totalChat = Chat::count();
        $totalEmail = Email::count();
        $totalFeedback = Customer_feedback::count();
        $totalSurveys = Survey::count();
    
        return view('home', compact(
            'totalCustomers',
            'totalCustomer_cases',
            'totalChat',
            'totalEmail',
            'totalFeedback',
            'totalSurveys'
        ));
    }
}
