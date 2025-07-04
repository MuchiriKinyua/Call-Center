<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt text-orange"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('agents.index') }}" class="nav-link {{ Request::is('agents*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-headset text-orange"></i>
        <p>Agents</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('agent_performances.index') }}" class="nav-link {{ Request::is('agent_performances*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-line text-orange"></i>
        <p>Agent Performances</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('audits.index') }}" class="nav-link {{ Request::is('audits*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-clipboard-check text-orange"></i>
        <p>Audits</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('callback_requests.index') }}" class="nav-link {{ Request::is('callback_requests*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-phone-square-alt text-orange"></i>
        <p>Callback Requests</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('calls.index') }}" class="nav-link {{ Request::is('calls*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-phone-alt text-orange"></i>
        <p>Calls</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('campaigns.index') }}" class="nav-link {{ Request::is('campaigns*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-bullhorn text-orange"></i>
        <p>Campaigns</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('cases.index') }}" class="nav-link {{ Request::is('cases*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-briefcase text-orange"></i>
        <p>Cases</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('chats.index') }}" class="nav-link {{ Request::is('chats*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-comments text-orange"></i>
        <p>Chats</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('complaint_categories.index') }}" class="nav-link {{ Request::is('complaint_categories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-list text-orange"></i>
        <p>Complaint Categories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('crm_settings.index') }}" class="nav-link {{ Request::is('crm_settings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-cogs text-orange"></i>
        <p>Crm Settings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('customers.index') }}" class="nav-link {{ Request::is('customers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users text-orange"></i>
        <p>Customers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('customer_feedbacks.index') }}" class="nav-link {{ Request::is('customer_feedbacks*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-comment-dots text-orange"></i>
        <p>Customer Feedbacks</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('departments.index') }}" class="nav-link {{ Request::is('departments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-building text-orange"></i>
        <p>Departments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dialers.index') }}" class="nav-link {{ Request::is('dialers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-phone-volume text-orange"></i>
        <p>Dialers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('emails.index') }}" class="nav-link {{ Request::is('emails*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-envelope text-orange"></i>
        <p>Emails</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('escalations.index') }}" class="nav-link {{ Request::is('escalations*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-exclamation-triangle text-orange"></i>
        <p>Escalations</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('ivr_flows.index') }}" class="nav-link {{ Request::is('ivr_flows*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-project-diagram text-orange"></i>
        <p>Ivr Flows</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('logins.index') }}" class="nav-link {{ Request::is('logins*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-sign-in-alt text-orange"></i>
        <p>Logins</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('notification_settings.index') }}" class="nav-link {{ Request::is('notification_settings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-bell text-orange"></i>
        <p>Notification Settings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('performance_reports.index') }}" class="nav-link {{ Request::is('performance_reports*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-chart-line text-orange"></i>
        <p>Performance Reports</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('quality_assessments.index') }}" class="nav-link {{ Request::is('quality_assessments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-check-circle text-orange"></i>
        <p>Quality Assessments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('queues.index') }}" class="nav-link {{ Request::is('queues*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-stream text-orange"></i>
        <p>Queues</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('sentiment_analyses.index') }}" class="nav-link {{ Request::is('sentiment_analyses*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-smile text-orange"></i>
        <p>Sentiment Analyses</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('sms.index') }}" class="nav-link {{ Request::is('sms*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-sms text-orange"></i>
        <p>Sms</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('social_media.index') }}" class="nav-link {{ Request::is('social_media*') ? 'active' : '' }}">
        <i class="nav-icon fab fa-twitter text-orange"></i>
        <p>Social Media</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('supervisors.index') }}" class="nav-link {{ Request::is('supervisors*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tie text-orange"></i>
        <p>Supervisors</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('surveys.index') }}" class="nav-link {{ Request::is('surveys*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-poll text-orange"></i>
        <p>Surveys</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('tickets.index') }}" class="nav-link {{ Request::is('tickets*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-ticket-alt text-orange"></i>
        <p>Tickets</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('ticket_statutes.index') }}" class="nav-link {{ Request::is('ticket_statutes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-balance-scale text-orange"></i>
        <p>Ticket Statutes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('voice_recordings.index') }}" class="nav-link {{ Request::is('voice_recordings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-microphone-alt text-orange"></i>
        <p>Voice Recordings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('whatsapps.index') }}" class="nav-link {{ Request::is('whatsapps*') ? 'active' : '' }}">
        <i class="nav-icon fab fa-whatsapp text-orange"></i>
        <p>Whatsapps</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('workflows.index') }}" class="nav-link {{ Request::is('workflows*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-project-diagram text-orange"></i>
        <p>Workflows</p>
    </a>
</li>

