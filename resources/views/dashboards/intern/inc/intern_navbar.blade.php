<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered profile-pic">

                <img id="userImage" src="{{ asset('images/no_image.jpg') }}" class="img-circle" width="80">

                </a>
            </p>
            <h5 class="centered">{{ Auth::user()->internPersonalInformation->first_name }} {{ Auth::user()->internPersonalInformation->last_name }}</h5>
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
                    <span>My Account</span>
                </a>
                <ul class="sub">
                    <li id="manage_users"><a href="#"><i class="glyphicon glyphicon-edit"></i> My Profile</a></li>
                    <li id="account_settings"><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                </ul>
            </li>
            @yield('administration_active')
            <li class="sub-menu">
                <a id="applications" href="javascript:">
                    <i class="glyphicon glyphicon-file"></i>
                    <span>Scope Of Work</span>
                </a>
                <ul class="sub">

                    <li id="manage_intern_requests"> <a href="#"><i class="glyphicon glyphicon-edit"></i> My Scope of work</a></li>
                </ul>
            </li>
           <li class="sub-menu">
                <a id="work_plan" href="javascript:">
                    <i class="glyphicon glyphicon-folder-close"></i>
                    <span>Work Plans</span>
                </a>
                <ul class="sub">
                    <li id="add_work_plan"> <a href="{{ route('addWorkPlanPage') }}"><i class="glyphicon glyphicon-plus-sign"></i> Add Work Plan</a></li>
                    <li id="manage_work_plan"> <a href="{{ route('showWorkPlan') }}"><i class="glyphicon glyphicon-edit"></i> My Work Plans</a></li>
                </ul>
            </li>

            @yield('work_plans_active')


            <li class="sub-menu">
                <a id="attendance_sheet" href="javascript:">
                    <i class="fa fa-calendar"></i>
                    <span> Attendance Sheets</span>
                </a>
                <ul class="sub">
                    <li id="add_attendance_sheet"> <a href="{{route('addTimeSheetPage')}}"><i class="glyphicon glyphicon-plus-sign"></i> Add Attendance Sheet</a></li>
                    <li id="manage_attendance_sheet"> <a href="{{route('viewAttendanceSheet')}}"><i class="glyphicon glyphicon-edit"></i> Manage</a></li>
                </ul>
            </li>

            @yield('attendance_sheet_active')


            @yield('intern_request_active')


            <li class="sub-menu">
                <a id="documents" href="javascript:">
                    <i class="glyphicon glyphicon-folder-open"></i>
                    <span>Documents</span>
                </a>
                <ul class="sub">
                    <li id="download_host_documents"> <a href="{{ route('uploadHostDocuments') }}"><i class="glyphicon glyphicon-download"></i>Add Document</a></li>
                    <li id="upload_host_documents"> <a href="{{ route('downloads') }}"><i class="glyphicon glyphicon-upload"></i>Manage Documents</a></li>
                </ul>
            </li>

            @yield('host_documents')
            <li class="sub-menu">
                <a id="applications" href="javascript:">
                    <i class="glyphicon glyphicon-briefcase"></i>
                    <span>Capstone Project</span>
                </a>
                <ul class="sub">
                    <li id="add_intern_requests"> <a href="#"><i class="glyphicon glyphicon-edit"></i> Manage Capstone</a></li>
                    </li>
                    @yield('intern_request_active')



                </ul>
        <!-- sidebar menu end-->
    </div>
</aside>

<!--sidebar end-->
