<div class="container col-lg-12">
    <div class="panel-body">
        {!! Form::open(['route' => ['storeTempInternPersonalInformation'], 'method' => 'POST', 'class' => 'form-horizontal style-form', 'id' => 'attachInternPersonalInformationForm']) !!}

        <div class="attach-personal-information-messages"></div>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">

                <!-- First Name -->
                <div class="form-group">
                    {{ Form::label('first_name', ' First Name', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::text('first_name', '', ['class' => 'form-control', 'id' => 'first_name', 'placeholder' => 'First Name', 'autocomplete' => 'off', 'required']) }}
                    </div>
                </div>
                <!-- /First name -->

                <!-- Last  Name -->
                <div class="form-group">
                    {{ Form::label('last_name', ' Last  Name', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::text('last_name', '', ['class' => 'form-control', 'id' => 'last_name', 'placeholder' => 'Last  Name', 'autocomplete' => 'off', 'required']) }}
                    </div>
                </div>
                <!-- /Last  name -->

                <!-- Other Names -->
                <div class="form-group">
                    {{ Form::label('other_names', ' Other Names', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::text('other_names', '', ['class' => 'form-control', 'id' => 'other_names', 'placeholder' => 'Other Names', 'autocomplete' => 'off', 'required']) }}
                    </div>
                </div>
                <!-- /First name -->

                <!-- Other Names

                 -->

                <!-- gender-->
                <div class="form-group">
                    {{ Form::label('gender', 'Gender', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                                'gender', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Male' => 'Male',
                                        'Female' => 'Female',
                                        'Other' => 'Other',

                                    ),
                                '', //value
                                ['id' => 'gender', 'class' => 'form-control', 'required'] //attributes
                            )
                        }}
                    </div>
                </div>
                <!-- /gender -->

                <!-- Nationality-->
                <div class="form-group">
                    {{ Form::label('nationality', 'Nationality', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                            'nationality', //name
                            array( //options
                                    '' => '~~SELECT~~',
                                    'Zambian' => 'Zambian',
                                    'Other' => 'Other (specify)',
                                ),
                            '', //value
                            ['id' => 'nationality', 'class' => 'form-control', 'required'] //attributes
                        )
                    }}
                    </div>
                </div>

                <div id="specific_nationality" class="form-group" style = "display:none">
                    {{ Form::label('nationality_type', 'Specify Nationality', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::text('nationality_type', '', ['class' => 'form-control', 'id' => 'nationality_type', 'placeholder' => 'Nationality', 'autocomplete' => 'off']) }}
                    </div>
                </div>
                <!-- /Nationality -->


                <!-- Email of Applicant -->
                <div class="form-group">
                    {{ Form::label('email', ' Email Address', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::email('email', '', ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email Address', 'autocomplete' => 'off', 'required']) }}
                    </div>
                </div>
                <!-- /Email of Applicant -->

            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">

                <!-- Phone Number of Applicant-->
                <div class="form-group">
                    {{ Form::label('phone_number', 'Applicant Phone Number', ['class' => 'col-sm-12 control-label']) }}
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
                            {{ Form::number('phone_number', '', ['class' => 'form-control', 'id' => 'phone_number', 'placeholder' => 'Phone Number', 'autocomplete' => 'off', 'required']) }}
                        </div>

                    </div>
                </div>
                <!-- /Phone Number of Applicant-->

                <!-- Address of Residence -->
                <div class="form-group">
                    {{ Form::label('residential_address', 'Residential Address', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::text('residential_address', '', ['class' => 'form-control', 'id' => 'residential_address', 'placeholder' => 'Residential Address', 'autocomplete' => 'off', 'required']) }}
                    </div>
                </div>
                <!-- /Address of Residence -->


                <!-- Province -->
                <div class="form-group">
                    {{ Form::label('town', 'Province', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                            'town', //name
                            array( //options
                                    '' => '~~SELECT~~',
                                    'Lusaka ' => 'Lusaka ',
                                    'CopperBelt ' => 'CopperBelt ',
                                    'Eastern ' => 'Eastern ',
                                    'Western ' => 'Western ',
                                    'North Western ' => 'North Western ',
                                    'Southern ' => 'Southern ',
                                    'Luapula ' => 'Luapula ',
                                    'Muchinga ' => 'Muchinga ',
                                    'Northern ' => 'Northern ',
                                    'Central ' => 'Central ',

                                ),
                            '', //value
                            ['id' => 'town', 'class' => 'form-control', 'required'] //attributes
                        )
                    }}
                    </div>
                </div>
                <!-- Province-->

                <!-- Special Needs -->
                <div class="form-group">
                    {{ Form::label('special_needs_question', 'Are you a person living with a disability?', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                            'special_needs_question', //name
                            array( //options
                                    '' => '~~SELECT~~',
                                    'Yes' => 'Yes',
                                    'No' => 'No ',

                                ),
                            '', //value
                            ['id' => 'special_needs_question', 'class' => 'form-control', 'required'] //attributes
                        )
                    }}
                    </div>
                </div>
                <!-- /Special Needs -->

                <div id="specific_special_needs" class="form-group" style = "display:none">
                    {{ Form::label('special_needs', 'Please describe any special needs', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::text('special_needs', '', ['class' => 'form-control', 'id' => 'specific_special_needs', 'placeholder' => 'Describe needs', 'autocomplete' => 'off']) }}
                    </div>
                </div>

                <!-- Topic Of Interest -->
                <div class="form-group">
                    {{ Form::label('topic_of_interest', 'Youth Lead Zambia activities and internships focus on building civic education and leadership skills in three areas: governance, health, and women’s empowerment. Please pick one area that best represents your educational background and technical field of interest. You will be assigned an internship in one of the three areas', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                            'topic_of_interest', //name
                            array( //options
                                    '' => '~~SELECT~~',
                                    'Health' => 'Health',
                                     'Governance' => 'Governance',
                                     'Women\'s Rights' => 'Women\'s Rights',
                                ),
                            '', //value
                            ['id' => 'topic_of_interest', 'class' => 'form-control', 'required'] //attributes
                        )
                    }}
                    </div>
                </div>
                <!-- /Topic of Interest -->


        </div>
    </div>

        <div class="modal-footer" style="border-top: 0px">
            {{--<button type="button" class="btn btn-theme"> << Previous</button>--}}
            {!! Form::submit('Next', ['class' => 'btn btn-primary', 'id' => 'attachInternPersonalInformationFormBtn']) !!}

        </div>
        {!! Form::close() !!}

    </div>
</div>

