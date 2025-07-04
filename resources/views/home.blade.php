@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4 text-center text-primary">Supervisor CRM Panel</h2>

    <div class="row">
        <!-- CRM Dashboard Cards -->
        @foreach ([
            ['count' => $totalCustomers ?? 0, 'label' => 'Customers', 'route' => 'customers.index', 'icon' => 'users', 'color' => 'primary'],
            ['count' => $totalCustomer_cases ?? 0, 'label' => 'Inquiries', 'route' => 'customer_cases.index', 'icon' => 'question-circle', 'color' => 'success'],
            ['count' => $totalChat ?? 0, 'label' => 'Interactions', 'route' => 'chats.index', 'icon' => 'comment-dots', 'color' => 'info'],
            ['count' => $totalEmail ?? 0, 'label' => 'Emails', 'route' => 'emails.index', 'icon' => 'envelope', 'color' => 'warning'],
            ['count' => $totalFeedback ?? 0, 'label' => 'Feedback', 'route' => 'customer_feedbacks.index', 'icon' => 'star', 'color' => 'danger'],
            ['count' => $totalSurveys ?? 0, 'label' => 'Surveys', 'route' => 'surveys.index', 'icon' => 'poll', 'color' => 'secondary'],
            ['count' => $totalCRMSettings ?? 0, 'label' => 'CRM Settings', 'route' => 'crm_settings.index', 'icon' => 'cogs', 'color' => 'dark'],
            ['count' => $totalSupervisors ?? 0, 'label' => 'Supervisors', 'route' => 'supervisors.index', 'icon' => 'user-shield', 'color' => 'primary'],
        ] as $card)
            <div class="col-md-3">
                <div class="card shadow-lg bg-{{ $card['color'] }} text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-{{ $card['icon'] }} fa-2x"></i>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $card['count'] }}</h2>
                        <h4 class="lead">{{ $card['label'] }}</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route($card['route']) }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage {{ $card['label'] }} <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
