<nav class="navbar navbar-expand bg-light d-flex justify-content-between align-items-center px-3 w-100">
    <!-- Left: Icons -->
    <ul class="navbar-nav d-flex align-items-center">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('patients.trashed') }}" title="Recycle Bin">
                <i class="fas fa-trash-alt" style="font-size: 18px;"></i>
            </a>
        </li>
<li class="nav-item d-flex align-items-center">
    <span class="nav-link" title="Notifications" style="font-size: 16px;">
        Notifications
    </span>
    <div class="custom-control custom-switch ml-2 mt-1">
        <input type="checkbox" class="custom-control-input" id="notificationToggle" checked>
        <label class="custom-control-label" for="notificationToggle"></label>
    </div>
</li>

    </ul>

    <!-- Center: Date & Time -->
    <div class="d-flex align-items-center justify-content-center">
        <h5 id="current-date" class="mb-0 mr-2"></h5>
        <h5 id="current-time" class="mb-0"></h5>
    </div>

    <!-- Right: Language, Accessibility, Profile -->
    <ul class="navbar-nav d-flex align-items-center">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="accessibilityDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" title="Accessibility Options">
                <i class="fas fa-wheelchair" style="font-size: 18px;"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accessibilityDropdown">
                <a class="dropdown-item" href="#" onclick="toggleFontSize()">Toggle Large Text</a>
                <a class="dropdown-item" href="#" onclick="toggleContrast()">Toggle High Contrast</a>
                <a class="dropdown-item" href="#" onclick="alert('Screen reader mode not implemented yet.')">Screen Reader Mode</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <img src="https://flagcdn.com/w40/gb.png" width="20" alt="English" class="mr-1"> English
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                <a class="dropdown-item" href="{{ route('setLanguage', ['lang' => 'sw']) }}"><img src="https://flagcdn.com/w40/ke.png" width="20" class="mr-2"> Kiswahili</a>
                <!-- Add more languages if needed -->
            </div>
        </li>

        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
                     class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li class="user-header bg-primary">
                    <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
                         class="img-circle elevation-2" alt="User Image">
                    <p>
                        {{ Auth::user()->name }}
                        <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                    </p>
                </li>
                <li class="user-footer">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                    <a href="#" class="btn btn-default btn-flat float-right"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                </li>
            </ul>
        </li>
    </ul>
</nav>

<script>
    function updateDateTime() {
        const now = new Date();
        const optionsDate = { day: '2-digit', month: '2-digit', year: 'numeric' };
        const optionsTime = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false };
        document.getElementById('current-date').innerText = now.toLocaleDateString('en-GB', optionsDate);
        document.getElementById('current-time').innerText = now.toLocaleTimeString('en-GB', optionsTime);
    }
    setInterval(updateDateTime, 1000);
    updateDateTime();
</script>