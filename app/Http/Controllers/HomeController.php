<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer_case;

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
    $totalCases = Customer_case::count();
    $complaints = Customer_case::where('category', 'Complaint')->count();
    $inquiries = Customer_case::where('category', 'Inquiry')->count();
    $others = Customer_case::whereNotIn('category', ['Complaint', 'Inquiry'])->count();
    $pending = Customer_case::where('status', 'Pending')->count();
    $resolved = Customer_case::where('status', 'Resolved')->count();
    $closed = Customer_case::where('status', 'Closed')->count();
    $escalated = Customer_case::where('status', 'Escalated')->count();

    // Static placeholder data – replace with real DB queries later if needed
    $categoryCounts = [
        'Billing' => 10,
        'Technical' => 5,
        'Service' => 15,
    ];

    $subCategoryCounts = [
        'SIM Issue' => 7,
        'Network' => 10,
        'Activation' => 13,
    ];

    $priorityCounts = [
        'High' => 8,
        'Medium' => 12,
        'Low' => 5,
    ];

    return view('home', compact(
        'totalCases',
        'complaints',
        'inquiries',
        'others',
        'pending',
        'resolved',
        'closed',
        'escalated',
        'categoryCounts',
        'subCategoryCounts',
        'priorityCounts'
    ));
}


}
