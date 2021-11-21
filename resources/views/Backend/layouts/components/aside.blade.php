<aside>
    <div class="aside-header text-center">
        <a href="{{ route('backend') }}" class="navbar-brand pt-3">
            <b>Z</b>ero Admin
            {{-- <img src="{!! asset('Backend/images/logo.png') !!}" alt="Brand Name" width="150"> --}}
        </a>
        {{-- <a class="navbar-brand sidebarToggle float-right" data-target="#exampleMainLayout" data-toggle="layout-full" href="#!"><i class="ti ti-menu"></i></a> --}}
    </div>
    <div class="nav-aside" data-simplebar data-simplebar-direction="ltr">
        <ul id="asidemenu" role="tablist">
            <li>
                <a href="#!">
                    <i class="aside-icon fi flaticon-home"></i>
                    <span class="text-control">Dashboard</span>
                </a>
            </li>
            <li role="tab">
                <a data-toggle="collapse" href="#asideItem1" role="button" aria-expanded="false" aria-controls="collapseOne">
                    <i class="aside-icon fi flaticon-networking"></i>
                    <span class="text-control">Management</span>
                    <i class="collapse-icon fi flaticon-next"></i>
                </a>
                <ul id="asideItem1" class="collapse" role="tabpanel" aria-labelledby="asideItem1" data-parent="#asidemenu">
                    <li><a href="{{ route('backend.team') }}">Team</a></li>
                    <li><a href="{{ route('backend.team.role') }}">Role</a></li>
                    <li><a href="{{ route('backend.team.group') }}">Group</a></li>
                    <li><a href="{{ route('backend.team.permission') }}">Permission</a></li>
                </ul>
            </li>
            <li role="tab">
                <a class="collapsed" data-toggle="collapse" href="#asideItem5" role="button" aria-expanded="false" aria-controls="asideItem5">
                    <i class="aside-icon fi flaticon-laptop"></i>
                    <span class="text-control">Users</span>
                    <i class="collapse-icon fi flaticon-next"></i>
                </a>
                <ul id="asideItem5" class="collapse" role="tabpanel" aria-labelledby="asideItem5" data-parent="#asidemenu">
                    <li><a href="#!">Active Users</a></li>
                    <li><a href="#!">Users</a></li>
                </ul>
            </li>

            <li role="tab">
                <a class="collapsed" data-toggle="collapse" href="#asideItem3" role="button" aria-expanded="false" aria-controls="asideItem3">
                    <i class="aside-icon fi flaticon-schedule"></i>
                    <span class="text-control">Leads Management</span>
                    <i class="collapse-icon fi flaticon-next"></i>
                </a>
                <ul id="asideItem3" class="collapse" role="tabpanel" aria-labelledby="asideItem3" data-parent="#asidemenu">
                    <li><a href="#!">Leads</a></li>
                    <li><a href="#!">Import Lead</a></li>
                    <li><a href="#!">Conversion</a></li>
                </ul>
            </li>

            <li><a href="#!"><i class="aside-icon fi flaticon-school"></i> <span class="text-control">Collages</span></a></li>
            <li><a href="#!"><i class="aside-icon fi flaticon-graduation-hat"></i> <span class="text-control">Courses</span></a></li>

            <li role="tab">
                <a class="collapsed" data-toggle="collapse" href="#asideItem2" role="button" aria-expanded="false" aria-controls="asideItem2">
                    <i class="aside-icon fi flaticon-pin"></i>
                    <span class="text-control">Locations</span>
                    <i class="collapse-icon fi flaticon-next"></i>
                </a>
                <ul id="asideItem2" class="collapse" role="tabpanel" aria-labelledby="asideItem2" data-parent="#asidemenu">
                    <li><a href="{{ route('backend.location.country') }}">Countries</a></li>
                    <li><a href="{{ route('backend.location.state') }}">State</a></li>
                    <li><a href="{{ route('backend.location.city') }}">City</a></li>
                    <li><a href="{{ route('backend.location.locality') }}">Locality</a></li>
                </ul>
            </li>

            <li role="tab">
                <a class="collapsed" data-toggle="collapse" href="#asideItem4" role="button" aria-expanded="false" aria-controls="asideItem4">
                    <i class="aside-icon fi flaticon-technical-support"></i>
                    <span class="text-control">Settings</span>
                    <i class="collapse-icon fi flaticon-next"></i>
                </a>
                <ul id="asideItem4" class="collapse" role="tabpanel" aria-labelledby="asideItem4" data-parent="#asidemenu">
                    <li><a href="#!">Configuration</a></li>
                    <li><a href="#!">Breadcrumb</a></li>
                </ul>
            </li>

            <li class="group-heading">Frontend</li>
            <li role="tab">
                <a class="collapsed" data-toggle="collapse" href="#asideItem6" role="button" aria-expanded="false" aria-controls="asideItem6">
                    <i class="aside-icon fi flaticon-information"></i>
                    <span class="text-control">Information</span>
                    <i class="collapse-icon fi flaticon-next"></i>
                </a>
                <ul id="asideItem6" class="collapse" role="tabpanel" aria-labelledby="asideItem6" data-parent="#asidemenu">
                    <li><a href="#!">Static Pages</a></li>
                    <li><a href="#!">Company Info</a></li>
                </ul>
            </li>
            <li><a href="#!"><i class="aside-icon fi flaticon-analytics"></i> <span class="text-control">Analytics</span></a></li>
        </ul>
    </div>
</aside>
