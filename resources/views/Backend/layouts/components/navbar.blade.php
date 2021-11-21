<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="sidebarToggle activeF" data-target="#exampleMainLayout" data-toggle="layout-full" href="javascript:void();"><i class="ti ti-menu"></i></a>
    <!-- <a class="navbar-brand" href="index.html">NikkAdmin</a> -->
    <button class="navbar-toggler d-none" type="button" data-toggle="collapse" data-target="#exampleTopNavbar" aria-controls="exampleTopNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="exampleTopNavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="ti ti-file"></i> New Leads</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="ti ti-stats-up"></i> New Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="ti ti-bolt"></i> Quick List</a>
            </li>
        </ul>

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-togglfe" href="#" id="navNotification" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti ti-bell" data-toggle="tooltip" title="Notification"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navNotification">
                    <a class="dropdown-item" href="#">6 New Notification</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><span class="text-muted"> Neeraj ‒ </span> Deserunt mollit anim id est laborum.</a>
                    <a class="dropdown-item" href="#"><span class="text-muted"> John ‒ </span> Anim id est laborum.</a>
                    <a class="dropdown-item" href="#"><span class="text-muted"> Any User ‒ </span> mollit anim id est laborum.</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-togglfe" href="#" id="navMessage" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti ti-email" data-toggle="tooltip" title="Messages"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navMessage">
                    <a class="dropdown-item" href="#">2 New Messages</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><span class="text-muted"> Neeraj ‒ </span> Deserunt mollit anim id est laborum.</a>
                    <a class="dropdown-item" href="#"><span class="text-muted"> John ‒ </span> Anim id est laborum.</a>
                    <a class="dropdown-item" href="#"><span class="text-muted"> Any User ‒ </span> mollit anim id est laborum.</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Neeraj Gusain <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">neerajonetwo@gmail.com</a>
                    <a class="dropdown-item" href="#!">Profile</a>
                    <a class="dropdown-item" href="#!">Change Password</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#!"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="#!" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>

        </ul>
    </div>
</nav>
