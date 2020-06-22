<div class="container col-lg-12">
    <div class="panel-body">
        {!! Form::open(['route' => ['storeTempOrganisationInformation'], 'method' => 'POST', 'class' => 'form-horizontal style-form', 'id' => 'attachTempOrganisationInformationForm']) !!}

            <div class="attach-organisation-information-messages"></div>

            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                        {{ Form::label('intern_location_question',
                         'Is the address provided the same address where intern will be located',
                          ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-sm-12">
                            {{  Form::select( //SELECT FORM
                                'intern_location_question', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Yes' => 'Yes',
                                        'No' => 'No',

                                    ),
                                '', //value
                                ['id' => 'intern_location_question', 'class' => 'form-control', 'required'] //attributes
                            )
                        }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('usaid_project_question',
                         'Will the intern be working on a USAID funded project',
                          ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-sm-12">
                            {{  Form::select( //SELECT FORM
                                'usaid_project_question', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Yes' => 'Yes',
                                        'No' => 'No',

                                    ),
                                '', //value
                                ['id' => 'usaid_project_question', 'class' => 'form-control', 'required'] //attributes
                            )
                        }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('intern_sponsorship_question',
                         'Are you able to provide financial support to interns in addition to the stripend provided by the
                         youth lead project',
                          ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-sm-12">
                            {{  Form::select( //SELECT FORM
                                'intern_sponsorship_question', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Yes' => 'Yes',
                                        'No' => 'No',

                                    ),
                                '', //value
                                ['id' => 'intern_sponsorship_question', 'class' => 'form-control', 'required'] //attributes
                            )
                        }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('mentoring_program_question',
                         'Does your organisation provide mentoring programs',
                          ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-sm-12">
                            {{  Form::select( //SELECT FORM
                                'mentoring_program_question', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Yes' => 'Yes',
                                        'No' => 'No',

                                    ),
                                '', //value
                                ['id' => 'mentoring_program_question', 'class' => 'form-control', 'required'] //attributes
                            )
                        }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('handicapped_accessible_question',
                         'Is your office/work space handicapped accessible',
                          ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-sm-12">
                            {{  Form::select( //SELECT FORM
                                'handicapped_accessible_question', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Yes' => 'Yes',
                                        'No' => 'No',

                                    ),
                                '', //value
                                ['id' => 'handicapped_accessible_question', 'class' => 'form-control', 'required'] //attributes
                            )
                        }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('advocacy_engagement_question',
                         'Does your organisation engage in advocacy?',
                          ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-sm-12">
                            {{  Form::select( //SELECT FORM
                                'advocacy_engagement_question', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Yes' => 'Yes',
                                        'No' => 'No',

                                    ),
                                '', //value
                                ['id' => 'advocacy_engagement_question', 'class' => 'form-control', 'required'] //attributes
                            )
                        }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('intern_hosting_question',
                         'Has your organisation hosted interns before',
                          ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-sm-12">
                            {{  Form::select( //SELECT FORM
                                'intern_hosting_question', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Yes' => 'Yes',
                                        'No' => 'No',

                                    ),
                                '', //value
                                ['id' => 'intern_hosting_question', 'class' => 'form-control', 'required'] //attributes
                            )
                        }}
                        </div>
                    </div>

                    <div id="candidate_identification" class="form-group" style = "display:none">
                        {{ Form::label('intern_identification_question',
                         'How do you identify candidates for internship',
                          ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-sm-12">
                            {{  Form::select( //SELECT FORM
                                'intern_identification_question', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Newspaper' => 'Newspaper',
                                        'Social Media' => 'Social Media',
                                        'School/University' => 'School/University',
                                        'Random Application' => 'Random Application',
                                        'Other' => 'Other (Specify)',

                                    ),
                                '', //value
                                ['id' => 'intern_identification_question', 'class' => 'form-control'] //attributes
                            )
                        }}
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6">

                    <div id="specific_intern_address" class="form-group" style = "display:none">
                        {{ Form::label('intern_location_address', 'Specify Intern Address', ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-sm-12">
                            {{ Form::text('intern_location_address', '', ['class' => 'form-control', 'id' => 'intern_location_address', 'placeholder' => 'Address', 'autocomplete' => 'off']) }}
                        </div>
                    </div>

                    <div id="usaid_funded_project" class="form-group" style = "display:none">
                        {{ Form::label('funded_project_name', 'Provide Name of USAID funded project', ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-sm-12">
                            {{ Form::text('funded_project_name', '', ['class' => 'form-control', 'id' => 'funded_project_name', 'placeholder' => 'Project Name', 'autocomplete' => 'off']) }}
                        </div>
                    </div>

                    <div id="financial_support" class="form-group" style = "display:none">
                        {{ Form::label('support_amount', 'How much financial support are you able to to provide
                        for each intern per month in USD (United States Dollar)', ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-sm-12">
                            {{ Form::number('support_amount', '', ['class' => 'form-control', 'id' => 'support_amount', 'placeholder' => 'Amount (USD)', 'autocomplete' => 'off']) }}
                        </div>
                    </div>

                    <div id="mentorship_category" class="form-group" style = "display:none">
                        {{ Form::label('mentorship_type',
                         'Does your organisation provide a mentor for individuals, or for a group?',
                          ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-sm-12">
                            {{  Form::select( //SELECT FORM
                                'mentorship_type', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Individual' => 'Individual',
                                        'Group' => 'Group',
                                    ),
                                '', //value
                                ['id' => 'mentorship_type', 'class' => 'form-control'] //attributes
                            )
                        }}
                        </div>
                    </div>

                    <div id="internship_duration" class="form-group" style = "display:none">
                        {{ Form::label('duration_of_internship', 'What was the average duration of internship at your organisation', ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-md-8">
                            <div class="input-group input-large">
                                {{ Form::number('duration_of_internship', '', ['class' => 'form-control', 'id' => 'duration_of_internship', 'placeholder' => 'duration', 'autocomplete' => 'off']) }}
                                <span class="input-group-addon"></span>
                                {{  Form::select( //SELECT FORM
                                        'frequency', //name
                                        array(
                                            'Days' => 'Days',
                                            'Months' => 'Months',
                                            'Years' => 'Years',
                                        ),
                                        '', //value
                                        ['id' => 'frequency', 'class' => 'form-control'] //attributes
                                    )
                                }}
                            </div>

                        </div>
                    </div>

                    <div id="internship_policy" class="form-group" style = "display:none">
                        {{ Form::label('internship_policy_question',
                         'Does your organisation have an internship policy',
                          ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-sm-12">
                            {{  Form::select( //SELECT FORM
                                'internship_policy_question', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Yes and consistent' => 'Yes we do and is consistent with Government of Zambia policies and procedures',
                                        'Yes and not consistent' => 'Yes we do but is not consistent with Government of Zambia policies and procedures',
                                        'No and willing' => 'No we don\'t but are willing to adopt one',
                                        'No and not willing' => 'No we don\'t and are willing to adopt one',

                                    ),
                                '', //value
                                ['id' => 'internship_policy_question', 'class' => 'form-control'] //attributes
                            )
                        }}
                        </div>
                    </div>

                    <div id="intern_identification" class="form-group" style = "display:none">
                        {{ Form::label('specific_candidate_identification', 'Please specify how you identify candidates for internship', ['class' => 'col-sm-12 control-label']) }}
                        <div class="col-sm-12">
                            {{ Form::text('specific_candidate_identification', '', ['class' => 'form-control', 'id' => 'specific_candidate_identification', 'placeholder' => 'Candidate Internship Identification', 'autocomplete' => 'off']) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer" style="border-top: 0px">
                <button type="button" id="organisationInformationFormPreviousButton" class="btn btn-warning"> << Previous</button>
                {!! Form::submit('Next', ['class' => 'btn btn-primary', 'id' => 'attachOrganisationAndApplicantBtn']) !!}

            </div>
        {!! Form::close() !!}

    </div>
</div>
