<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Apply</span>
                    <h1 class="text-capitalize mb-4 text-lg">Become A Youth Leader</h1>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="#" class="text-white-50">Youth lead Application</a></li>
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
                Youth Lead Application Form
            </h4>
        </header>
        <div class="panel-body">
            <div class="col-lg-12">
                <div class="row">
                    <!-- steps-form -->
                    <div class="steps-form">
                        <div class="steps-row setup-panel">
                            <div class="steps-step">
                                <a href="#personal_information"  id="step-1" class="btn btn-success btn-large btn-circle">1</a>
                                <p><b>Personal Information</b></p>
                            </div>
                            <div class="steps-step">
                                <a href="#parents_information"  id="step-2" class="btn btn-default btn-large btn-circle" disabled="disabled">2</a>
                                <p><b>Parents Information</b></p>
                            </div>
                            <div class="steps-step">
                                <a href="#education_information"  id="step-3" class="btn btn-default btn-large btn-circle" disabled="disabled">3</a>
                                <p><b>Education Information</b></p>
                            </div>
                            <div class="steps-step">
                                <a href="#professional_experience"  id="step-4" class="btn btn-default btn-large btn-circle" disabled="disabled">4</a>
                                <p><b>Professional Experience</b></p>
                            </div>
                            <div class="steps-step">
                                <a href="#references"  id="step-5" class="btn btn-default btn-large btn-circle" disabled="disabled">5</a>
                                <p><b>References</b></p>
                            </div>
                            <div class="steps-step">
                                <a href="#intern_uploads"  id="step-6" class="btn btn-default btn-large btn-circle" disabled="disabled">6</a>
                                <p><b>Uploads</b></p>
                            </div>

                        </div>
                    </div>
                    <!-- /steps-form -->

                    <hr style="border:1px solid white;">
                </div>

                <!-- First Step -->
                <div class="row setup-content" id="personal_information" style="display: block;">
                    @include('website::inc.components.forms.intern.intern_personal_information_form')
                </div> <!-- /row -->
                <!-- /First Step -->

                <!-- Second Step -->
                <div class="row setup-content" id="parents_information" style="display: none;">
                    @include('website::inc.components.forms.intern.intern_parental_information_form')
                </div>
                <!-- /Second step -->

                <!-- Third Step -->
                <div class="row setup-content" id="education_information" style="display: block;">
                    @include('website::inc.components.forms.intern.intern_education_information_form')
                </div> <!-- /row -->
                <!-- Third Step -->

                <!-- Fourth Step -->
                <div class="row setup-content" id="professional_experience" style="display: none;">
                    @include('website::inc.components.forms.intern.intern_professional_experience_form')
                </div> <!-- /row -->
                <!-- /Fourth Step -->

                <!-- Fifth Step -->
                <div class="row setup-content" id="references" style="display: none;">
                    @include('website::inc.components.forms.intern.intern_reference_form')
                </div> <!-- /row -->
                <!-- /Fifth Step -->

                <!-- sixth Step -->
                <div class="row setup-content" id="intern_uploads" style="display: none;">
                    @include('website::inc.components.forms.intern.intern_application_uploads_form')
                </div> <!-- /row -->
                <!-- /sixth Step -->

                <!-- partners Section -->
                @include('website::inc.components.sections.services_section')
                <!-- /Intro Section -->

            </div> <!-- /col-lg-12 -->
        </div> <!-- /pane-body -->
    </div>
</section>

