<div class="container col-lg-12">
    <div class="panel-body">
        {!! Form::open(['route' => ['storeTempInternEducationInformation'], 'method' => 'POST', 'class' => 'form-horizontal style-form', 'id' => 'tempAttachEducationInformationForm']) !!}

        <div class="attach-personal-information-messages"></div>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <!-- Qualification obtained -->
                <div class="form-group">
                    {{ Form::label('qualification_obtained', 'Highest Qualification Obtained', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                                'qualification_obtained', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Certificate ' => 'Certificate ',
                                        'Diploma ' => 'Diploma ',
                                        'Bachelor’s Degree ' => 'Bachelor’s Degree ',
                                        'Master’s Degree ' => 'Master’s Degree ',
                                        'Doctoral ' => 'Doctoral ',

                                    ),
                                '', //value
                                ['id' => 'qualification_obtained', 'class' => 'form-control', 'required'] //attributes
                            )
                        }}
                    </div>
                </div>
                <!-- /qualification_obtained -->

                <!-- name of institution -->
                <div class="form-group">
                    {{ Form::label('name_of_institution', 'Name of Institution', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::text('name_of_institution', '', ['class' => 'form-control', 'id' => 'name_of_institution', 'placeholder' => 'Name of Institution', 'autocomplete' => 'off', 'required']) }}
                    </div>
                </div>
                <!-- /name of institution-->

                <!-- Year graduated -->
                <div class="form-group">
                    {{ Form::label('year_graduated', 'Year Graduated', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::number('year_graduated', '', ['class' => 'form-control', 'id' => 'year_graduated', 'placeholder' => 'Year Graduated', 'autocomplete' => 'off', 'required']) }}
                    </div>
                </div>
                <!-- /Year graduated -->



            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">

                <!-- Main field of study -->
                <div class="form-group">
                    {{ Form::label('main_field_of_study', 'Specify Field of Study (e.g., Civil Engineer, Political Science, Biology, Adult Education, etc. )', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::text('main_field_of_study', '', ['class' => 'form-control', 'id' => 'main_field_of_study', 'placeholder' => ' Field of Study', 'autocomplete' => 'off', 'required']) }}

                    </div>
                </div>
                <!-- \Main field of study -->

                <!-- Microsoft suite experience-->
                <div class="form-group">
                    {{ Form::label('microsoft_suite_experience', 'Microsoft Suite Experience', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                            'microsoft_suite_experience', //name
                            array( //options
                                    '' => '~~SELECT~~',
                                    'no experience ' => 'no experience ',
                                    'little experience ' => 'little experience ',
                                    'some experience ' => 'some experience ',
                                    'significant experience ' => 'significant experience ',

                                ),
                            '', //value
                            ['id' => 'microsoft_suite_experience', 'class' => 'form-control', 'required'] //attributes
                        )
                    }}
                    </div>
                </div>
                <!-- /Microsoft suite experience -->

            </div>
        </div>

        <div class="modal-footer" style="border-top: 0px">
            {{--<button type="button" class="btn btn-theme"> << Previous</button>--}}
            {!! Form::submit('Next', ['class' => 'btn btn-primary', 'id' => 'tempAttachEducationInformationFormBtn']) !!}

        </div>
        {!! Form::close() !!}

    </div>
</div>



