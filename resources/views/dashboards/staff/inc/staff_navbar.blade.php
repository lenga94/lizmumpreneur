<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered profile-pic">
                    @if(Auth::user()->staffPersonalInformation->profile_image != null)
                        <img id="userImage" src="{{ asset('storage/profile_images/'. Auth::user()->staffPersonalInformation->profile_image) }}" class="img-circle" width="80">
                    @else
                        <img id="userImage" src="{{ asset('images/no_image.jpg') }}" class="img-circle" width="80">
                    @endif
                </a>
            </p>
            <h5 class="centered">{{ Auth::user()->staffPersonalInformation->first_name }} {{ Auth::user()->staffPersonalInformation->last_name }}</h5>
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
                    <li id="manage_users"><a href="{{ route('manageUsers') }}"><i class="glyphicon glyphicon-edit"></i> Manage Users</a></li>
                </ul>
            </li>
            @yield('administration_active')

           <li class="sub-menu">
                <a id="applications" href="javascript:">
                    <i class="fa fa-file-text"></i>
                    <span>Applications</span>
                </a>
                <ul class="sub">
                    <li id="manage_applications"> <a href="{{ route('manageAllApplications') }}"><i class="glyphicon glyphicon-edit"></i> Manage Applications</a></li>
                </ul>
            </li>

            @yield('application_active')

            <li class="sub-menu">
                <a id="host_organisations" href="javascript:">
                    <i class="fa fa-building-o"></i>
                    <span> Host Organisations</span>
                </a>
                <ul class="sub">
                    <li id="create_host_organisation"><a href="{{ route('createHostOrganisation') }}"><i class="glyphicon glyphicon-plus-sign"></i> Add Organisation</a></li>
                    <li id="manage_host_organisations"> <a href="{{ route('manageHostOrganisations') }}"><i class="glyphicon glyphicon-edit"></i> Manage Organisations</a></li>
                    <li id="manage_usaid_funded_projects"> <a href="{{ route('manageUsaidFundedProjects') }}"><i class="fa fa-briefcase"></i> USAID Projects</a></li>
                    <li id="intern_assignment"> <a href="{{ route('showCreateInternAssignment') }}"><i class="glyphicon glyphicon-plus-sign"></i> Intern Assignment</a></li>
                    <li id="manage_intern_requests"> <a href="{{ route('manageInternRequests') }}"><i class="fa fa-search-plus"></i> Intern Requests</a></li>
                </ul>
            </li>

            @yield('host_organisation_active')


            <li class="sub-menu">
                <a id="interns" href="javascript:">
                    <i class="fa fa-users"></i>
                    <span> Interns</span>
                </a>
                <ul class="sub">
                    <li id="add_intern"><a href="#"><i class="glyphicon glyphicon-plus-sign"></i> Add Intern</a></li>
                    <li id="manage_interns"> <a href="{{ route('manageInterns') }}"><i class="glyphicon glyphicon-edit"></i> Manage Interns</a></li>
                    <li id="intern_work_plans"> <a href="{{ route('manageWorkPlans') }}"><i class="glyphicon glyphicon-folder-close"></i>Work Plans </a></li>
                </ul>
            </li>

            @yield('intern_active')


            <li class="sub-menu">
                <a id="documents" href="javascript:">
                    <i class="glyphicon glyphicon-folder-open"></i>
                    <span>Documents</span>
                </a>
                <ul class="sub">
                    <li id="download_host_documents"> <a href="{{ route('downloadHostDocuments') }}"><i class="glyphicon glyphicon-download"></i>Download Documents</a></li>
                    <li id="upload_host_documents"> <a href="{{ route('uploadHostDocuments') }}"><i class="glyphicon glyphicon-upload"></i>Upload Documents</a></li>
                </ul>
            </li>

            @yield('host_documents')


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>

<!--sidebar end-->
