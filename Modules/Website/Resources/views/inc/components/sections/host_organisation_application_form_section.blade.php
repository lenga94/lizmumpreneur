<section class="page-title bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Apply</span>
                    <h1 class="text-capitalize mb-4 text-lg">Become A Host Organisation With Us</h1>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="#" class="text-white-50">Host Organisation Application</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section1 intro">
    <div class="container">
        <div class="row justify-content-center">
            <span class="h6 text-color ">Read the <a href="{{ route('termsAndConditionsPage') }}"><i><u>Conditions & Requirements</u></i></a> of Youthlead Activity before You apply</span><br>
        </div>
    </div>
</section>


<!-- contact form start -->
<section class="section2 panel">
    <div class="container">
        <header class="panel-heading wht-bg">
            <h4 class="gen-case" id="section_title">
                Host Organisation Application Form
            </h4>
        </header>
        <div class="panel-body">
            <div class="col-lg-12">
                <div class="row">
                    <!-- steps-form -->
                    <div class="steps-form">
                        <div class="steps-row setup-panel">
                            <div class="steps-step">
                                <a href="#applicant_and_organisation_details"  id="step-1" class="btn btn-success btn-large btn-circle">1</a>
                                <p><b>Applicant and Organisation Details</b></p>
                            </div>
                            <div class="steps-step">
                                <a href="#organisation_information"  id="step-2" class="btn btn-default btn-large btn-circle" disabled="disabled">2</a>
                                <p><b>Organisation Information</b></p>
                            </div>
                            <div class="steps-step">
                                <a href="#intern_request"  id="step-3" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                <p><b>Intern Request</b></p>
                            </div>
                        </div>
                    </div>
                    <!-- /steps-form -->

                    <hr style="border:1px solid white;">
                </div>

                <!-- First Step -->
                <div class="row setup-content" id="applicant_and_organisation_details" style="display: block;">
                    @include('website::inc.components.forms.host_organisation.applicant_and _organisation_details_form')
                </div> <!-- /row -->
                <!-- /First Step -->

                <!-- Second Step -->
                <div class="row setup-content" id="organisation_information" style="display: none;">
                    @include('website::inc.components.forms.host_organisation.organisation_information_form')
                </div>
                <!-- /Second Step -->

                <!-- Third Step -->
                <div class="row setup-content" id="intern_request" style="display: none;">
                    @include('website::inc.components.forms.host_organisation.intern_request_form')
                </div> <!-- /row -->
                <!-- /Third Step -->

                <!-- partners Section -->
            @include('website::inc.components.sections.services_section')
            <!-- /Intro Section -->

            </div> <!-- /col-lg-12 -->
        </div> <!-- /pane-body -->
    </div>
</section>
