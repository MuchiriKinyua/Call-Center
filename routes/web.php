<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('agents', App\Http\Controllers\AgentController::class);
Route::resource('agent_performances', App\Http\Controllers\Agent_performanceController::class);
Route::resource('audits', App\Http\Controllers\AuditController::class);
Route::resource('callback_requests', App\Http\Controllers\Callback_requestController::class);
Route::resource('calls', App\Http\Controllers\CallController::class);
Route::resource('campaigns', App\Http\Controllers\CampaignController::class);
Route::resource('cases', App\Http\Controllers\CaseController::class);
Route::resource('chats', App\Http\Controllers\ChatController::class);
Route::resource('complaint_categories', App\Http\Controllers\Complaint_categoryController::class);
Route::resource('crm_settings', App\Http\Controllers\Crm_settingController::class);
Route::resource('customers', App\Http\Controllers\CustomerController::class);
Route::resource('customer_feedbacks', App\Http\Controllers\Customer_feedbackController::class);
Route::resource('departments', App\Http\Controllers\DepartmentController::class);
Route::resource('dialers', App\Http\Controllers\DialerController::class);
Route::resource('emails', App\Http\Controllers\EmailController::class);
Route::resource('escalations', App\Http\Controllers\EscalationController::class);
Route::resource('ivr_flows', App\Http\Controllers\Ivr_flowController::class);
Route::resource('logins', App\Http\Controllers\LoginController::class);
Route::resource('notification_settings', App\Http\Controllers\Notification_settingController::class);
Route::resource('performance_reports', App\Http\Controllers\Performance_reportController::class);
Route::resource('quality_assessments', App\Http\Controllers\Quality_assessmentController::class);
Route::resource('queues', App\Http\Controllers\QueueController::class);
Route::resource('sentiment_analyses', App\Http\Controllers\Sentiment_analysisController::class);
Route::resource('sms', App\Http\Controllers\SmsController::class);
Route::resource('social_media', App\Http\Controllers\Social_mediaController::class);
Route::resource('supervisors', App\Http\Controllers\SupervisorController::class);
Route::resource('surveys', App\Http\Controllers\SurveyController::class);
Route::resource('tickets', App\Http\Controllers\TicketController::class);
Route::resource('ticket_statutes', App\Http\Controllers\Ticket_statuteController::class);
Route::resource('voice_recordings', App\Http\Controllers\Voice_recordingController::class);
Route::resource('whatsapps', App\Http\Controllers\WhatsappController::class);
Route::resource('workflows', App\Http\Controllers\WorkflowController::class);
Route::resource('customer_cases', App\Http\Controllers\Customer_caseController::class);

Route::get('language/{lang}', function ($lang) {
    session(['locale' => $lang]);
    app()->setLocale($lang);
    return back();
})->name('setLanguage');

Route::get('/patients/trashed', [PatientController::class, 'trashed'])->name('patients.trashed');
Route::put('/patients/{id}/restore', [PatientController::class, 'restore'])->name('patients.restore');
Route::delete('/patients/{id}/force-delete', [PatientController::class, 'forceDelete'])->name('patients.forceDelete');

Route::get('/edms-login', function () {
    $user = Auth::user();
    $token = encrypt($user->id);
    return redirect("http://127.0.0.1:8001/sso-login?token=$token");
})->name('edms.sso.login');