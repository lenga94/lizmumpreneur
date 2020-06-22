<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered profile-pic">
                    @if(Auth::user()->hostOrganisationPersonalInformation->profile_image != null)
                        <img id="userImage" src="{{ asset('storage/profile_images/host_organisations/'. Auth::user()->hostOrganisationPersonalInformation->profile_image) }}" class="img-circle" width="80">
                    @else
                        <img id="userImage" src="{{ asset('images/no_image.jpg') }}" class="img-circle" width="80">
                    @endif
            </p>
            <h5 class="centered">{{ Auth::user()->hostOrganisationPersonalInformation->first_name }} {{ Auth::user()->hostOrganisationPersonalInformation->last_name }}</h5>
            <li class="mt">
                <a id="website" href="{{ url('/') }}">
                    <i class="glyphicon glyphicon-globe"></i>
                    <span>Website</span>
                </a>
            </li>

            @yield('dashboard_active')

            <li class="mt">
                <a id="dashboard" href="{{ route('dashboardPage') }}">
                    <i class="glyphicon glyphicon-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            @yield('dashboard_active')


            <li class="sub-menu">
                <a id="administration" href="javascript:">
                    <i class="fa fa-gears"></i>
                    <span>Administration</span>
                </a>
                <ul class="sub">
                    <li id="add_user"><a href="{{ route('manageUsers') }}"><i class="glyphicon glyphicon-plus-sign"></i> Add User</a></li>
                    <li id="manage_users"><a href="{{ route('manageUsers') }}"><i class="glyphicon glyphicon-edit"></i> Manage Users</a></li>
                    <li id="account_settings"><a href="{{ route('manageUsers') }}"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                </ul>
            </li>
            @yield('administration_active')

           <li class="sub-menu">
                <a id="intern_request" href="javascript:">
                    <i class="fa fa-file-text"></i>
                    <span>Intern Requests</span>
                </a>
                <ul class="sub">
                    <li id="add_intern_requests"> <a href="{{ route('addRequest') }}"><i class="glyphicon glyphicon-plus-sign"></i> Add Request</a></li>
                    <li id="manage_intern_requests"> <a href="{{ route('manageInternRequests') }}"><i class="glyphicon glyphicon-edit"></i> Manage Requests</a></li>
                </ul>
            </li>

            @yield('intern_request_active')

            <li class="sub-menu">
                <a id="interns" href="javascript:">
                    <i class="fa fa-users"></i>
                    <span> Interns</span>
                </a>
                <ul class="sub">
                    <li id="manage_interns"> <a href="{{ route('ManageUserInternRequests') }}"><i class="glyphicon glyphicon-edit"></i> Manage Interns</a></li>
                </ul>
            </li>

            @yield('intern_active')

            <li class="sub-menu">
                <a id="attendance_sheet" href="javascript:">
                    <i class="fa fa-calendar"></i>
                    <span> Attendance Sheets</span>
                </a>
                <ul class="sub">
                    <li id="manage_attendance_sheet"> <a href="{{ route('manageAttendanceSheet') }}"><i class="glyphicon glyphicon-edit"></i> Manage</a></li>
                </ul>
            </li>

            @yield('attendance_sheet_active')


            <li class="sub-menu">
                <a id="work_plan" href="javascript:">
                    <i class="glyphicon glyphicon-folder-close"></i>
                    <span>Goals and Objectives</span>
                </a>
                <ul class="sub">
                    <li id="work_plans"> <a href="{{ route('manageWorkPlans') }}"><i class="glyphicon glyphicon-edit"></i>Manage Work Plans</a></li>
                </ul>
            </li>

            @yield('work_plans_active')




            <li class="sub-menu">
                <a id="documents" href="javascript:">
                    <i class="glyphicon glyphicon-folder-open"></i>
                    <span>Documents</span>
                </a>
                <ul class="sub">
                    <li id="download_host_documents"> <a href="{{ route('downloads') }}"><i class="glyphicon glyphicon-download"></i>Download Document</a></li>
                    <li id="upload_host_documents"> <a href="{{ route('uploadHostDocuments') }}"><i class="glyphicon glyphicon-upload"></i>Upload Documents</a></li>
                </ul>
            </li>

            @yield('host_documents')


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>

<!--sidebar end-->
