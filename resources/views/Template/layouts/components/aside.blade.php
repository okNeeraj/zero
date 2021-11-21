<aside>
    <div class="aside-header text-center pt-2">
        <a href="{{ route('nikkadmin') }}" class="navbar-brand">NikkAdmin</a>
        <!-- <a class="navbar-brand sidebarToggle float-right" data-target="#exampleMainLayout" data-toggle="layout-full" href="#!"><i class="ti ti-menu"></i></a> -->
    </div>
    <div class="nav-aside" data-simplebar data-simplebar-direction="ltr">
        <ul id="asidemenu" role="tablist">
            <li role="tab">
                <a data-toggle="collapse" href="#asideItem1" role="button" aria-expanded="false"
                    aria-controls="collapseOne">
                    <i class="aside-icon ti ti-dashboard"></i>
                    <span class="text-control">Dashboard</span>
                </a>
                <ul id="asideItem1" class="collapse" role="tabpanel" aria-labelledby="asideItem1"
                    data-parent="#asidemenu">
                    <li><a href="#!">Dashboard 1</a></li>
                    <li><a href="#!">Dashboard 1</a></li>
                </ul>
            </li>
            <li role="tab">
                <a class="collapsed" data-toggle="collapse" href="#asideItem2" role="button" aria-expanded="false"
                    aria-controls="asideItem2">
                    <i class="aside-icon ti ti-layout-grid2"></i>
                    <span class="text-control">Layout</span>
                    <i class="collapse-icon ti ti-angle-right"></i>
                </a>
                <ul id="asideItem2" class="collapse" role="tabpanel" aria-labelledby="asideItem2"
                    data-parent="#asidemenu">
                    <li><a href="#!">Default Sidebar</a></li>
                    <li><a href="#!">Collapsed Sidebar</a></li>
                </ul>
            </li>
            <li role="tab">
                <a class="collapsed" data-toggle="collapse" href="#asideItem3" role="button" aria-expanded="false"
                    aria-controls="asideItem3">
                    <i class="aside-icon ti ti-layout-media-overlay"></i>
                    <span class="text-control">Pages</span>
                    <i class="collapse-icon ti ti-angle-right"></i>
                </a>
                <ul id="asideItem3" class="collapse" role="tabpanel" aria-labelledby="asideItem3"
                    data-parent="#asidemenu">
                    <li><a href="{{ route('nikkadmin.page') }}">Chat Room</a></li>
                    <li><a href="{{ route('nikkadmin.page') }}">Errors Page</a></li>
                    <li><a href="{{ route('nikkadmin.page.login') }}">Login Page</a></li>
                    <li><a href="{{ route('nikkadmin.page.otp') }}">OTP Page</a></li>
                    <li><a href="{{ route('nikkadmin.page') }}">Mail Box</a></li>
                    <li><a href="{{ route('nikkadmin.page.addUser') }}">User Profile</a></li>
                    <li><a href="{{ route('nikkadmin.page') }}">Empty Page</a></li>
                </ul>
            </li>
            <li class="group-heading">COMPONENT</li>
            <li role="tab">
                <a class="collapsed" data-toggle="collapse" href="#asideItem4" role="button" aria-expanded="false"
                    aria-controls="asideItem4">
                    <i class="aside-icon ti ti-blackboard"></i>
                    <span class="text-control">UI Elements</span>
                    <i class="collapse-icon ti ti-angle-right"></i>
                </a>
                <ul id="asideItem4" class="collapse" role="tabpanel" aria-labelledby="asideItem4"
                    data-parent="#asidemenu">
                    <li><a href="#!">Badges</a></li>
                    <li><a href="#!">Breadcrumb</a></li>
                    <li><a href="#!">Buttons</a></li>
                    <li><a href="#!">Gallery</a></li>
                    <li><a href="#!">List</a></li>
                    <li><a href="#!">Pagination</a></li>
                    <li><a href="#!">Progress Bar</a></li>
                    <li><a href="#!">Social Media</a></li>
                    <li><a href="#!">Tabs</a></li>
                    <li><a href="#!">Typography</a></li>
                </ul>
            </li>
            <li role="tab">
                <a class="collapsed" data-toggle="collapse" href="#asideItem5" role="button" aria-expanded="false"
                    aria-controls="asideItem5">
                    <i class="aside-icon ti ti-pencil-alt"></i>
                    <span class="text-control">Forms</span>
                    <i class="collapse-icon ti ti-angle-right"></i>
                </a>
                <ul id="asideItem5" class="collapse" role="tabpanel" aria-labelledby="asideItem5"
                    data-parent="#asidemenu">
                    <li><a href="{{ route('nikkadmin.forms.default') }}">Input Elements</a></li>
                    <li><a href="{{ route('nikkadmin.forms.default') }}">Default Form</a></li>
                    <li><a href="{{ route('nikkadmin.forms.default') }}">Form Validation</a></li>
                    <li><a href="{{ route('nikkadmin.forms.default') }}">Multi Step Form</a></li>
                    <li><a href="{{ route('nikkadmin.forms.default') }}">Calendar/Time</a></li>
                    <li><a href="{{ route('nikkadmin.forms.editor') }}">Editor</a></li>
                </ul>
            </li>
            <li role="tab">
                <a class="collapsed" data-toggle="collapse" href="#asideItem6" role="button" aria-expanded="false"
                    aria-controls="asideItem6">
                    <i class="aside-icon ti ti-layout-accordion-separated"></i>
                    <span class="text-control">Tables</span>
                    <i class="collapse-icon ti ti-angle-right"></i>
                </a>
                <ul id="asideItem6" class="collapse" role="tabpanel" aria-labelledby="asideItem6"
                    data-parent="#asidemenu">
                    <li><a href="../tables/basic.php">Basic Tables</a></li>
                    <li><a href="#!">Responsive Tables</a></li>
                    <li><a href="#!">Editable Tables</a></li>
                    <li><a href="#!">Data Tables</a></li>
                    <li><a href="#!">Fixed Header Tables</a></li>
                </ul>
            </li>
            <li role="tab">
                <a class="collapsed" data-toggle="collapse" href="#asideItem7" role="button" aria-expanded="false"
                    aria-controls="asideItem7">
                    <i class="aside-icon ti ti-bell"></i>
                    <span class="text-control">Notifications</span>
                    <i class="collapse-icon ti ti-angle-right"></i>
                </a>
                <ul id="asideItem7" class="collapse" role="tabpanel" aria-labelledby="asideItem7"
                    data-parent="#asidemenu">
                    <li><a href="#!">Alerts</a></li>
                    <li><a href="#!">Modals</a></li>
                    <li><a href="#!">Popup</a></li>
                    <li><a href="#!">Reapop</a></li>
                </ul>
            </li>
            <li><a href="#!"><i class="aside-icon ti ti-map-alt"></i> <span class="text-control">Maps</span></a></li>
            <li><a href="#!"><i class="aside-icon ti ti-bar-chart"></i> <span class="text-control">Chart</span></a></li>
        </ul>
    </div>
</aside>
