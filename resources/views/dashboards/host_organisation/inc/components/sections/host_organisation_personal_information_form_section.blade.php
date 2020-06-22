<div id="login-page">
    <div class="container">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Please provide your personal information to complete your account activation</h4>

            @include('inc.messages')

            {!! Form::open(['route' => ['storeHostOrganisationUserPersonalInformation'], 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'createHostOrganisationForm']) !!}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 right-divider">

                        <!-- first name -->
                        <div class="form-group">
                            {{ Form::label('first_name', 'First Name', ['class' => 'col-sm-3 control-label']) }}
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('first_name', '', ['class' => 'form-control', 'id' => 'first_name', 'placeholder' => 'First Name', 'autocomplete' => 'off', 'required']) }}
                            </div>
                        </div>
                        <!-- /first name -->

                        <!-- last name -->
                        <div class="form-group">
                            {{ Form::label('last_name', 'Last Name', ['class' => 'col-sm-3 control-label']) }}
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('last_name', '', ['class' => 'form-control', 'id' => 'last_name', 'placeholder' => 'Last Name', 'autocomplete' => 'off', 'required']) }}
                            </div>
                        </div>
                        <!-- /last name -->

                        <!-- other names -->
                        <div class="form-group">
                            {{ Form::label('other_names', 'Other Names', ['class' => 'col-sm-3 control-label']) }}
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('other_names', '', ['class' => 'form-control', 'id' => 'other_names', 'placeholder' => 'Other Names', 'autocomplete' => 'off']) }}
                            </div>
                        </div>
                        <!-- /other names -->

                        <!-- title -->
                        <div class="form-group">
                            {{ Form::label('title', 'Title', ['class' => 'col-sm-3 control-label']) }}
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{  Form::select( //SELECT FORM
                                        'title', //name
                                        array( //options
                                                '' => '~~SELECT~~',
                                                'Mr' => 'Mr',
                                                'Mrs' => 'Mrs',
                                                'Miss ' => 'Miss ',
                                                'Dr' => 'Dr',
                                                'Hon' => 'Hon',
                                            ),
                                        '', //value
                                        ['id' => 'title', 'class' => 'form-control', 'required'] //attributes
                                    )
                                }}
                            </div>
                        </div>
                        <!-- /title -->

                        <!-- date of birth -->
                        <div class="form-group">
                            {{ Form::label('dob', 'Date of Bith', ['class' => 'col-sm-3 control-label']) }}
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('dob', '', ['class' => 'form-control', 'id' => 'dob', 'placeholder' => 'Date of Birth', 'autocomplete' => 'off']) }}
                            </div>
                        </div>
                        <!-- /date of birth -->

                        <!-- gender -->
                        <div class="form-group">
                            {{ Form::label('gender', 'Gender', ['class' => 'col-sm-3 control-label']) }}
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{  Form::select( //SELECT FORM
                                        'gender', //name
                                        array( //options
                                                '' => '~~SELECT~~',
                                                'Male' => 'Male',
                                                'Female' => 'Female',
                                                'Other ' => 'Other',
                                            ),
                                        '', //value
                                        ['id' => 'gender', 'class' => 'form-control', 'required'] //attributes
                                    )
                                }}
                            </div>
                        </div>
                        <!-- /gender -->

                        <!-- nationality -->
                        <div class="form-group">
                            {{ Form::label('nationality', 'Nationality', ['class' => 'col-sm-3 control-label']) }}
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{  Form::select( //SELECT FORM
                                        'nationality', //name
                                        array( //options
                                                '' => '~~SELECT~~',
                                                'Zambian' => 'Zambian',
                                                'Other' => 'Other(Specify)',
                                            ),
                                        '', //value
                                        ['id' => 'nationality', 'class' => 'form-control', 'required'] //attributes
                                    )
                                }}
                            </div>
                        </div>
                        <!-- /nationality -->

                        <!-- specific nationality -->
                        <div class="form-group" id="specific_nationality_section" style="display: none">
                            {{ Form::label('specific_nationality', 'Specific Nationality', ['class' => 'col-sm-3 control-label']) }}
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('specific_nationality', '', ['class' => 'form-control', 'id' => 'specific_nationality', 'placeholder' => 'Specific Nationality', 'autocomplete' => 'off']) }}
                            </div>
                        </div>
                        <!-- /specific nationality -->

                        <!-- nrc -->
                        <div class="form-group">
                            {{ Form::label('nrc', 'Nrc', ['class' => 'col-sm-3 control-label']) }}
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('nrc', '', ['class' => 'form-control', 'id' => 'nrc', 'placeholder' => 'Nrc  e.g (123456/78/1)', 'autocomplete' => 'off', 'required']) }}
                            </div>
                        </div>
                        <!-- /nrc -->

                        <!-- phone number -->
                        <div class="form-group">
                            {{ Form::label('phone_number', 'Contact Details', ['class' => 'col-sm-3 control-label']) }}
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-sm-6">
                                        {{  Form::select( //SELECT FORM
                                                'dial_code', //name
                                                $dialCodes,
                                                '249', //value
                                                ['id' => 'dial_code', 'class' => 'form-control', 'required'] //attributes
                                            )
                                        }}
                                    </div>

                                    <div class="col-sm-6">
                                        {{ Form::text('phone_number', '', ['class' => 'form-control', 'id' => 'phone_number', 'placeholder' => 'Phone Number', 'autocomplete' => 'off', 'required']) }}
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /phone number -->


                        <!-- residential_address -->
                        <div class="form-group">
                            {{ Form::label('residential_address', 'Residential Address', ['class' => 'col-sm-3 control-label']) }}
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('residential_address', '', ['class' => 'form-control', 'id' => 'residential_address', 'placeholder' => 'Residential Address', 'autocomplete' => 'off']) }}
                            </div>
                        </div>
                        <!-- /residential_address -->

                        <!-- postal_address -->
                        <div class="form-group">
                            {{ Form::label('postal_address', 'Postal Address', ['class' => 'col-sm-3 control-label']) }}
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('postal_address', '', ['class' => 'form-control', 'id' => 'postal_address', 'placeholder' => 'Postal Address', 'autocomplete' => 'off']) }}
                            </div>
                        </div>
                        <!-- /postal_address -->

                    </div>

                    <div class="col-md-offset-1 col-md-4">

                        <div class="col-md-12 profile-text mt mb centered">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 200px;">
                                    <img src="{{ asset('images/no_image.jpg') }}" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 200px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-theme02 btn-file">
                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select Profile Image</span>
                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                        {{ Form::file('profile_image', ['class' => 'default']) }}
                                    </span>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- /modal-body -->

            <div class="modal-footer">
                {{ Form::reset('Reset', ['class' => 'btn btn-primary']) }}
                {{ Form::submit('Submit', ['class' => 'btn btn-theme', 'id' => 'createHostOrganisationBtn', 'data-loading-text' => 'Loading...', 'autocomplete' => 'off']) }}
            </div>
            <!-- /modal-footer -->

            {!! Form::close() !!}
        </div>
    </div>
</div>
