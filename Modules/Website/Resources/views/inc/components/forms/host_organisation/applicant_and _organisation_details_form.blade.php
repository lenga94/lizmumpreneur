<div class="container col-lg-12">
    <div class="panel-body">
    {!! Form::open(['route' => ['storeTempApplicantAndOrganisationDetails'], 'method' => 'POST', 'class' => 'form-horizontal style-form', 'id' => 'attachOrganisationAndApplicantForm']) !!}

        <div class="attach-applicant-and-organisation-details-messages"></div>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <!-- Name of Applicant -->
                <div class="form-group">
                    {{ Form::label('applicant_name', 'Applicant Name', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::text('applicant_name', '', ['class' => 'form-control', 'id' => 'applicant_name', 'placeholder' => 'Applicant Name', 'autocomplete' => 'off', 'required']) }}
                    </div>
                </div>
                <!-- /Name of Applicant -->

                <!-- Title of Applicant -->
                <div class="form-group">
                    {{ Form::label('applicant_title', 'Applicant Title', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::text('applicant_title', '', ['class' => 'form-control', 'id' => 'applicant_title', 'placeholder' => 'Applicant Title', 'autocomplete' => 'off', 'required']) }}
                    </div>
                </div>
                <!-- /Title of Applicant -->

                <!-- Phone Number of Applicant-->
                <div class="form-group">
                    {{ Form::label('applicant_phone_number', 'Applicant Phone Number', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-md-12">
                        <div class="input-group input-large">
                            {{  Form::select( //SELECT FORM
                                    'dial_code', //name
                                    $dialCodes,
                                '249', //value
                                    ['id' => 'dial_code', 'class' => 'form-control', 'required'] //attributes
                                )
                            }}

                            <span class="input-group-addon"></span>
                            {{ Form::number('applicant_phone_number', '', ['class' => 'form-control', 'id' => 'applicant_phone_number', 'placeholder' => 'Phone Number', 'autocomplete' => 'off', 'required']) }}
                        </div>

                    </div>
                </div>
                <!-- /Phone Number of Applicant-->

                <!-- Email of Applicant -->
                <div class="form-group">
                    {{ Form::label('applicant_email', 'Applicant Email', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::email('applicant_email', '', ['class' => 'form-control', 'id' => 'applicant_email', 'placeholder' => 'Applicant Email', 'autocomplete' => 'off', 'required']) }}
                    </div>
                </div>
                <!-- /Email of Applicant -->

                <!-- Name of Organisation -->
                <div class="form-group">
                    {{ Form::label('organisation_name', 'Organisation Name', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::text('organisation_name', '', ['class' => 'form-control', 'id' => 'organisation_name', 'placeholder' => 'Organisation Name', 'autocomplete' => 'off', 'required']) }}

                    </div>
                </div>
                <!-- /Name of Organisation -->

            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">

                <!-- Address of Organisation -->
                <div class="form-group">
                    {{ Form::label('organisation_address', 'Organisation Address', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::text('organisation_address', '', ['class' => 'form-control', 'id' => 'organisation_address', 'placeholder' => 'Organisation Address', 'autocomplete' => 'off', 'required']) }}
                    </div>
                </div>
                <!-- /Address of Organisation -->

                <!-- Type of organisation -->
                <div class="form-group">
                    {{ Form::label('organisation_type', 'Type of Organisation', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                            'organisation_type', //name
                            array( //options
                                    '' => '~~SELECT~~',
                                    'Private sector' => 'Private sector',
                                    'Government' => 'Government',
                                    'Nonprofit ' => 'Nonprofit ',
                                    'For-profit ' => 'For-profit ',
                                    'University' => 'University',
                                    'Other' => 'Other (specify)',
                                ),
                            '', //value
                            ['id' => 'organisation_type', 'class' => 'form-control', 'required'] //attributes
                        )
                    }}
                    </div>
                </div>
                <!-- /Type of organisation -->

                <div id="specific_organisation_type" class="form-group" style = "display:none">
                    {{ Form::label('type_of_organisation', 'Specify Organisation Type', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::text('type_of_organisation', '', ['class' => 'form-control', 'id' => 'type_of_organisation', 'placeholder' => 'Organisation Type', 'autocomplete' => 'off']) }}
                    </div>
                </div>

                <!-- Registration of organisation -->
                <div class="form-group">
                    {{ Form::label('registration_of_organisation', 'Registration of Organisation', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                            'registration_of_organisation', //name
                            array( //options
                                    '' => '~~SELECT~~',
                                    'Zambian ' => 'Zambian ',
                                    'International ' => 'International ',
                                ),
                            '', //value
                            ['id' => 'registration_of_organisation', 'class' => 'form-control', 'required'] //attributes
                        )
                    }}
                    </div>
                </div>
                <!-- /Registration of organisation -->

                <!-- Sectors targeted by organisation -->
                <div class="form-group">
                    {{ Form::label('organisation_sector_targets', 'Organisation Sector Targets', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                            'organisation_sector_targets', //name
                            array( //options
                                    '' => '~~SELECT~~',
                                    'Health' => 'Health',
                                    'Governance' => 'Governance',
                                    'Youth Rights' => 'Youth Rights',
                                    'Women’s Rights' => 'Women’s Rights',
                                    'Other' => 'Other (specify)',
                                ),
                            '', //value
                            ['id' => 'organisation_sector_targets', 'class' => 'form-control', 'required'] //attributes
                        )
                    }}
                    </div>
                </div>
                <!-- /Sectors targeted by organisation -->

                <div id="specific_sector_target" class="form-group" style = "display:none">
                    {{ Form::label('sector_target', 'Specify Sector Target', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::text('sector_target', '', ['class' => 'form-control', 'id' => 'sector_target', 'placeholder' => 'Sector Target', 'autocomplete' => 'off']) }}
                    </div>
                </div>

                <!-- Main source of organisation information -->
                <div class="form-group">
                    {{ Form::label('organisation_information_main_source', 'Main Source of Organisation Information', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                            'organisation_information_main_source', //name
                            array( //options
                                    '' => '~~SELECT~~',
                                    'LinkedIn' => 'LinkedIn',
                                    'Facebook' => 'Facebook',
                                    'Website' => 'Website',
                                ),
                            '', //value
                            ['id' => 'organisation_information_main_source', 'class' => 'form-control', 'required'] //attributes
                        )
                    }}
                    </div>
                </div>
                <!-- /Main source of organisation information -->
            </div>
        </div>

        <div class="modal-footer" style="border-top: 0px">
            {{--<button type="button" class="btn btn-theme"> << Previous</button>--}}
            {!! Form::submit('Next', ['class' => 'btn btn-primary', 'id' => 'attachOrganisationAndApplicantBtn']) !!}

        </div>
        {!! Form::close() !!}

    </div>
</div>
