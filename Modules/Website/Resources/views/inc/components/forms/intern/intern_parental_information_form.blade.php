<div class="container col-lg-12">
    <div class="panel-body">
        {!! Form::open(['route' => ['storeTempInternParentsInformation'], 'method' => 'POST', 'class' => 'form-horizontal style-form', 'id' => 'attachTempattachParentsInformationForm']) !!}

        <div class="attach-applicant-and-organisation-details-messages"></div>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">

                <!-- gender-->
                <div class="form-group">
                    {{ Form::label('reside_with', 'Who do you reside with?', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                                'reside_with', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Alone' => 'Alone',
                                        'Both my parents' => 'Both my parents',
                                        'My mother only' => 'My mother only',
                                        'My father only' => 'My father only',
                                        'My Guardian' => 'My Guardian',

                                    ),
                                '', //value
                                ['id' => 'reside_with', 'class' => 'form-control', 'required'] //attributes
                            )
                        }}
                    </div>
                </div>
                <!--Mothers highest education level-->
                <div class="form-group" id="mothers_highest_education_level" style = "display:none">
                    {{ Form::label('mothers_highest_education_level', 'What is the highest education level your mother has achieved? ', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                                'mothers_highest_education_level', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Less than Grade 12 Certificate' => 'Less than Grade 12 Certificate',
                                        'Grade 12 Certificate' => 'Grade 12 Certificate',
                                        'Tertiary Certificate ' => 'Tertiary Certificate ',
                                        'Diploma' => 'Diploma',
                                        'Bachelors Degree' => 'Bachelors Degree',
                                        'Masters Degree' => 'Masters Degree',
                                        'PHD' => 'PHD',
                                    ),
                                '', //value
                                ['id' => 'mothers_highest_education_level', 'class' => 'form-control', ''] //attributes
                            )
                        }}
                    </div>
                </div>
                <!--/Mothers highest education level-->

                <!--Fathers highest education level-->
                <div class="form-group" id="fathers_highest_education_level" style = "display:none">
                    {{ Form::label('fathers_highest_education_level', 'What is the highest education level your father has achieved?  ', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                                'fathers_highest_education_level', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                         'Less than Grade 12 Certificate' => 'Less than Grade 12 Certificate',
                                        'Grade 12 Certificate' => 'Grade 12 Certificate',
                                        'Tertiary Certificate ' => 'Tertiary Certificate ',
                                        'Diploma' => 'Diploma',
                                        'Bachelors Degree' => 'Bachelors Degree',
                                        'Masters Degree' => 'Masters Degree',
                                        'PHD' => 'PHD',
                                    ),
                                '', //value
                                ['id' => 'fathers_highest_education_level', 'class' => 'form-control', ''] //attributes
                            )
                        }}
                    </div>
                </div>
                <!--/Fathers highest education level-->

                <!--Guardian highest education level-->
                <div class="form-group" id="guardian_highest_education_level" style = "display:none">
                    {{ Form::label('guardian_highest_education_level', 'What is the highest education level your Guardian has achieved? ', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                                'guardian_highest_education_level', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Less than Grade 12 Certificate' => 'Less than Grade 12 Certificate',
                                        'Grade 12 Certificate' => 'Grade 12 Certificate',
                                        'Tertiary Certificate ' => 'Tertiary Certificate ',
                                        'Diploma' => 'Diploma',
                                        'Bachelors Degree' => 'Bachelors Degree',
                                        'Masters Degree' => 'Masters Degree',
                                        'PHD' => 'PHD',
                                    ),
                                '', //value
                                ['id' => 'guardian_highest_education_level', 'class' => 'form-control', ''] //attributes
                            )
                        }}
                    </div>
                </div>
                <!--/Guardian highest education level-->


            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">

                <!--Mothers Employment status-->
                <div class="form-group" id="mothers_employment_status" style = "display:none">
                    {{ Form::label('mothers_employment_status', 'What is Your Mothers Employment status', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                                'mothers_employment_status', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Employed at a full-time job' => 'Employed at a full-time job',
                                        'Employed at a part-time job' => 'Employed at a part-time job',
                                        'Employed informally' => 'Employed informally',
                                        'Unemployed, looking for work' => 'Unemployed, looking for work',
                                        'Unemployed, not looking for work' => 'Unemployed, not looking for work',
                                        'Self-employed' => 'Self-employed',
                                    ),
                                '', //value
                                ['id' => 'mothers_employment_status', 'class' => 'form-control', ''] //attributes
                            )
                        }}
                    </div>
                </div>
                <!--/Mothers Employment status-->


                <!--Fathers Employment status-->
                <div class="form-group" id="fathers_employment_status" style = "display:none">
                    {{ Form::label('fathers_employment_status', 'What is Your Fathers Employment status', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                                'fathers_employment_status', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                       'Employed at a full-time job' => 'Employed at a full-time job',
                                        'Employed at a part-time job' => 'Employed at a part-time job',
                                        'Employed informally' => 'Employed informally',
                                        'Unemployed, looking for work' => 'Unemployed, looking for work',
                                        'Unemployed, not looking for work' => 'Unemployed, not looking for work',
                                        'Self-employed' => 'Self-employed',
                                    ),
                                '', //value
                                ['id' => 'fathers_employment_status', 'class' => 'form-control', ''] //attributes
                            )
                        }}
                    </div>
                </div>
                <!--/Fathers Employment status-->

                <!--Guardian Employment status-->
                <div class="form-group" id="guardian_employment_status" style = "display:none">
                    {{ Form::label('guardian_employment_status', 'What is Your Guardian Employment status', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                                'Guardian_employment_status', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                       'Employed at a full-time job' => 'Employed at a full-time job',
                                        'Employed at a part-time job' => 'Employed at a part-time job',
                                        'Employed informally' => 'Employed informally',
                                        'Unemployed, looking for work' => 'Unemployed, looking for work',
                                        'Unemployed, not looking for work' => 'Unemployed, not looking for work',
                                        'Self-employed' => 'Self-employed',
                                    ),
                                '', //value
                                ['id' => 'guardian_employment_status', 'class' => 'form-control', ''] //attributes
                            )
                        }}
                    </div>
                </div>
                <!--/Guardian Employment status-->


                <!--Combined monthly income-->
                <div class="form-group">
                    {{ Form::label('combined_monthly_income', 'Please estimate the combined monthly income of your household', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                                'combined_monthly_income', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                        'Less than K1,000' => 'Less than K1,000',
                                        'K1,000 to K2,999' => 'K1,000 to K2,999',
                                        'K3,000 to K4,999' => 'K3,000 to K4,999',
                                        'K5,000 to K9,999' => 'K5,000 to K9,999',
                                        'Above K10,000' => 'Above K10,000',

                                    ),
                                '', //value
                                ['id' => 'combined_monthly_income', 'class' => 'form-control', ''] //attributes
                            )
                        }}
                    </div>
                </div>
                <!--/Combined monthly income-->

                <!--Mothers Employment status-->
                <div class="form-group" id="mothers_highest_education_level" style = "display:none">
                    {{ Form::label('mothers_employment_status', 'Mothers Employment status', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                                'mothers_employment_status', //name
                                array( //options
                                        '' => '~~SELECT~~',
                                       'Employed at a full-time job' => 'Employed at a full-time job',
                                        'Employed at a part-time job' => 'Employed at a part-time job',
                                        'Employed informally' => 'Employed informally',
                                        'Unemployed, looking for work' => 'Unemployed, looking for work',
                                        'Unemployed, not looking for work' => 'Unemployed, not looking for work',
                                        'Self-employed' => 'Self-employed',
                                    ),
                                '', //value
                                ['id' => 'mothers_employment_status', 'class' => 'form-control', ''] //attributes
                            )
                        }}
                    </div>
                </div>
                <!--/Mothers Employment status-->
            </div>

            <div class="modal-footer" style="border-top: 0px">
                {{--<button type="button" class="btn btn-theme"> << Previous</button>--}}
                {!! Form::submit('Next', ['class' => 'btn btn-primary', 'id' => 'attachTempattachParentsInformationFormBtn']) !!}

            </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>


