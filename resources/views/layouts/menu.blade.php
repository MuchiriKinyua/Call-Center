<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('agents.index') }}" class="nav-link {{ Request::is('agents*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Agents</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('agentPerformances.index') }}" class="nav-link {{ Request::is('agentPerformances*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Agent Performances</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('audits.index') }}" class="nav-link {{ Request::is('audits*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Audits</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('callbackRequests.index') }}" class="nav-link {{ Request::is('callbackRequests*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Callback Requests</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('calls.index') }}" class="nav-link {{ Request::is('calls*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Calls</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('campaigns.index') }}" class="nav-link {{ Request::is('campaigns*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Campaigns</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('cases.index') }}" class="nav-link {{ Request::is('cases*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Cases</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('chats.index') }}" class="nav-link {{ Request::is('chats*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Chats</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('complaintCategories.index') }}" class="nav-link {{ Request::is('complaintCategories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Complaint Categories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('crmSettings.index') }}" class="nav-link {{ Request::is('crmSettings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Crm Settings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('customers.index') }}" class="nav-link {{ Request::is('customers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Customers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('customerFeedbacks.index') }}" class="nav-link {{ Request::is('customerFeedbacks*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Customer Feedbacks</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('departments.index') }}" class="nav-link {{ Request::is('departments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Departments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('dialers.index') }}" class="nav-link {{ Request::is('dialers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dialers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('emails.index') }}" class="nav-link {{ Request::is('emails*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Emails</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('escalations.index') }}" class="nav-link {{ Request::is('escalations*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Escalations</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('ivrFlows.index') }}" class="nav-link {{ Request::is('ivrFlows*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Ivr Flows</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('logins.index') }}" class="nav-link {{ Request::is('logins*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Logins</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('notificationSettings.index') }}" class="nav-link {{ Request::is('notificationSettings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Notification Settings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('performanceReports.index') }}" class="nav-link {{ Request::is('performanceReports*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Performance Reports</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('qualityAssessments.index') }}" class="nav-link {{ Request::is('qualityAssessments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Quality Assessments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('queues.index') }}" class="nav-link {{ Request::is('queues*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Queues</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('sentimentAnalyses.index') }}" class="nav-link {{ Request::is('sentimentAnalyses*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Sentiment Analyses</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('sms.index') }}" class="nav-link {{ Request::is('sms*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Sms</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('socialMedia.index') }}" class="nav-link {{ Request::is('socialMedia*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Social Media</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('supervisors.index') }}" class="nav-link {{ Request::is('supervisors*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Supervisors</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('surveys.index') }}" class="nav-link {{ Request::is('surveys*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Surveys</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('tickets.index') }}" class="nav-link {{ Request::is('tickets*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Tickets</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('ticketStatutes.index') }}" class="nav-link {{ Request::is('ticketStatutes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Ticket Statutes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('voiceRecordings.index') }}" class="nav-link {{ Request::is('voiceRecordings*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Voice Recordings</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('whatsapps.index') }}" class="nav-link {{ Request::is('whatsapps*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Whatsapps</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('workflows.index') }}" class="nav-link {{ Request::is('workflows*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Workflows</p>
    </a>
</li>
