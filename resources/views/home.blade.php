@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4 text-center text-primary">Supervisor Dashboard</h2>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="row">
        <!-- CRM Panel -->
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">CRM</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach([
                            ['count' => $totalCases ?? 0, 'label' => 'Total Cases', 'icon' => 'briefcase', 'color' => 'primary', 'route' => '#'],
                            ['count' => $complaints ?? 0, 'label' => 'Complaints', 'icon' => 'exclamation-triangle', 'color' => 'danger', 'route' => '#'],
                            ['count' => $inquiries ?? 0, 'label' => 'Inquiries', 'icon' => 'question-circle', 'color' => 'info', 'route' => '#'],
                            ['count' => $others ?? 0, 'label' => 'Others', 'icon' => 'ellipsis-h', 'color' => 'secondary', 'route' => '#'],
                            ['count' => $pending ?? 0, 'label' => 'Pending', 'icon' => 'clock', 'color' => 'warning', 'route' => '#'],
                            ['count' => $resolved ?? 0, 'label' => 'Resolved', 'icon' => 'check-circle', 'color' => 'success', 'route' => '#'],
                            ['count' => $closed ?? 0, 'label' => 'Closed', 'icon' => 'lock', 'color' => 'dark', 'route' => '#'],
                            ['count' => $escalated ?? 0, 'label' => 'Escalated', 'icon' => 'level-up-alt', 'color' => 'danger', 'route' => '#'],
                        ] as $card)
                            <div class="col-3 mb-3">
                                <a href="{{ $card['route'] }}" class="card text-center bg-{{ $card['color'] }} text-white shadow-sm text-decoration-none">
                                    <div class="card-body p-2">
                                        <i class="fas fa-{{ $card['icon'] }} fa-lg mb-1"></i>
                                        <h5 class="h5 mb-0">{{ $card['count'] }}</h5>
                                        <small>{{ $card['label'] }}</small>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Telephony Panel -->
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Telephony</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach([
                            ['count' => $inbound ?? 0, 'label' => 'Inbound', 'icon' => 'phone-alt', 'color' => 'success', 'route' => '#'],
                            ['count' => $outbound ?? 0, 'label' => 'Outbound', 'icon' => 'phone', 'color' => 'primary', 'route' => '#'],
                            ['count' => $missed ?? 0, 'label' => 'Missed Call', 'icon' => 'phone-slash', 'color' => 'danger', 'route' => '#'],
                            ['count' => $voicemail ?? 0, 'label' => 'Voicemail', 'icon' => 'voicemail', 'color' => 'dark', 'route' => '#'],
                            ['count' => $abandon ?? 0, 'label' => 'Abandon', 'icon' => 'ban', 'color' => 'secondary', 'route' => '#'],
                            ['count' => $totalTalktime ?? 0, 'label' => 'Total Talktime', 'icon' => 'clock', 'color' => 'info', 'route' => '#'],
                            ['count' => $avgTalktime ?? 0, 'label' => 'Avg Talktime', 'icon' => 'hourglass-half', 'color' => 'warning', 'route' => '#'],
                            ['count' => $wrapup ?? 0, 'label' => 'In Wrap-up', 'icon' => 'user-clock', 'color' => 'secondary', 'route' => '#'],
                        ] as $card)
                            <div class="col-3 mb-3">
                                <a href="{{ $card['route'] }}" class="card text-center bg-{{ $card['color'] }} text-white shadow-sm text-decoration-none">
                                    <div class="card-body p-2">
                                        <i class="fas fa-{{ $card['icon'] }} fa-lg mb-1"></i>
                                        <h5 class="h5 mb-0">{{ $card['count'] }}</h5>
                                        <small>{{ $card['label'] }}</small>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- Channel Utilization Row -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Channel Utilization</h4>
        </div>
        <div class="card-body">
            <div class="row text-center">
                @foreach([
                    ['count' => $calls ?? 0, 'label' => 'Calls', 'icon' => 'phone', 'color' => 'danger'],
                    ['count' => $twitter ?? 0, 'label' => 'Twitter', 'icon' => 'twitter', 'color' => 'primary'],
                    ['count' => $whatsapp ?? 0, 'label' => 'WhatsApp', 'icon' => 'whatsapp', 'color' => 'success'],
                    ['count' => $email ?? 0, 'label' => 'Email', 'icon' => 'envelope', 'color' => 'dark'],
                    ['count' => $sms ?? 0, 'label' => 'SMS', 'icon' => 'comment-alt', 'color' => 'info'],
                    ['count' => $webchat ?? 0, 'label' => 'Webchat', 'icon' => 'comments', 'color' => 'secondary'],
                ] as $channel)
                    <div class="col-2">
                        <div class="card bg-{{ $channel['color'] }} text-white shadow-sm mb-3">
                            <div class="card-body py-3">
                                <i class="fab fa-{{ $channel['icon'] }} fa-2x mb-2"></i>
                                <h5 class="h5">{{ $channel['count'] }}</h5>
                                <small>{{ $channel['label'] }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Category Charts -->
<div class="row mb-4">
    <!-- Category Pie Chart -->
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                Category
            </div>
            <div class="card-body">
                <canvas id="categoryChart" height="200"></canvas>
            </div>
        </div>
    </div>

    <!-- Sub Category Pie Chart -->
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                Sub Category
            </div>
            <div class="card-body">
                <canvas id="subcategoryChart" height="200"></canvas>
            </div>
        </div>
    </div>

    <!-- Case Priority Pie Chart -->
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                Case Priority
            </div>
            <div class="card-body">
                <canvas id="priorityChart" height="200"></canvas>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <!-- Social Media Summary (Left Column) -->
    <div class="col-md-6">
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-info text-white">
                <h4 class="mb-0">Social Media Summary</h4>
            </div>
            <div class="card-body">
                <canvas id="socialMediaChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Ageing Matrix (Right Column) -->
    <div class="col-md-6">
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Ageing Matrix</h4>
            </div>
            <div class="card-body">
                <canvas id="ageingMatrixChart"></canvas>
            </div>
        </div>
    </div>
</div>



<script>
    const categoryCtx = document.getElementById('categoryChart').getContext('2d');
    new Chart(categoryCtx, {
        type: 'pie',
        data: {
            labels: {!! json_encode(array_keys($categoryCounts ?? [])) !!},
            datasets: [{
                data: {!! json_encode(array_values($categoryCounts ?? [])) !!},
                backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745', '#6f42c1']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });

    const subcategoryCtx = document.getElementById('subcategoryChart').getContext('2d');
    new Chart(subcategoryCtx, {
        type: 'pie',
        data: {
            labels: {!! json_encode(array_keys($subCategoryCounts ?? [])) !!},
            datasets: [{
                data: {!! json_encode(array_values($subCategoryCounts ?? [])) !!},
                backgroundColor: ['#17a2b8', '#fd7e14', '#6610f2', '#20c997', '#6c757d']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });

    const priorityCtx = document.getElementById('priorityChart').getContext('2d');
    new Chart(priorityCtx, {
        type: 'pie',
        data: {
            labels: {!! json_encode(array_keys($priorityCounts ?? [])) !!},
            datasets: [{
                data: {!! json_encode(array_values($priorityCounts ?? [])) !!},
                backgroundColor: ['#28a745', '#ffc107', '#dc3545']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Social Media Bar Chart
    new Chart(document.getElementById('socialMediaChart'), {
        type: 'bar',
        data: {
            labels: ['Facebook', 'Twitter', 'Instagram', 'LinkedIn'],
            datasets: [{
                label: 'Posts',
                data: [134, 98, 76, 41],
                backgroundColor: ['#3b5998', '#1da1f2', '#e1306c', '#0077b5']
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true } }
        }
    });

    // Ageing Matrix Bar Chart
    new Chart(document.getElementById('ageingMatrixChart'), {
        type: 'bar',
        data: {
            labels: ['0–24 hrs', '24–48 hrs', '3–5 days', '5+ days'],
            datasets: [{
                label: 'Tickets',
                data: [22, 15, 7, 3],
                backgroundColor: ['#28a745', '#17a2b8', '#ffc107', '#dc3545']
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true } }
        }
    });
});
</script>



</div>
@endsection