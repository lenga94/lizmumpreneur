<div class="modal fade" id="termsAndConditionModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" style="width:1160px">

        <div class="modal-content">
            {!! Form::open(['method' => 'PUT', 'class' => 'form-horizontal', 'id' => 'editUserModalForm']) !!}

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> Edit User Details</h4>
            </div>

            <div class="modal-body">

                <div id="edit-user-messages"></div>

                <div class="row">
                    <div class="col-md-5">

                        <div class="form-group">
                            {{ Form::label('first_name', 'First Name', ['class' => 'col-sm-3 control-label']) }}<i class="fa fa-asterisk" style=" color:red; float:right;"></i>
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('first_name', '', ['class' => 'form-control', 'id' => 'first_name', 'placeholder' => 'First Name', 'autocomplete' => 'off', 'required']) }}
                            </div>
                        </div> <!-- /form-group-->

                        <div class="form-group">
                            {{ Form::label('last_name', 'Last Name', ['class' => 'col-sm-3 control-label']) }}<i class="fa fa-asterisk" style=" color:red; float:right;"></i>
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('last_name', '', ['class' => 'form-control', 'id' => 'last_name', 'placeholder' => 'Last Name', 'autocomplete' => 'off', 'required']) }}
                            </div>
                        </div> <!-- /form-group-->

                        <div class="form-group">
                            {{ Form::label('other_names', 'Other Names', ['class' => 'col-sm-3 control-label']) }}
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('other_names', '', ['class' => 'form-control', 'id' => 'other_names', 'placeholder' => 'Other Names', 'autocomplete' => 'off']) }}
                            </div>
                        </div> <!-- /form-group-->

                        <!-- title -->
                        <div class="form-group">
                            {{ Form::label('title', 'Title', ['class' => 'col-sm-3 control-label']) }}<i class="fa fa-asterisk" style=" color:red; float:right;"></i>
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{  Form::select( //SELECT FORM
                                        'title', //name
                                        array( //options
                                                '' => '~~SELECT~~',
                                                'Mr' => 'Mr',
                                                'Mrs' => 'Mrs',
                                                'Miss' => 'Miss',
                                                'Dr' => 'Dr',
                                            ),
                                        '', //value
                                        ['id' => 'title', 'class' => 'form-control', 'required'] //attributes
                                    )
                                }}
                            </div>
                        </div>
                        <!-- /title -->

                        <div class="form-group">
                            {{ Form::label('dob', 'Date Of Birth', ['class' => 'col-sm-3 control-label']) }}<i class="fa fa-asterisk" style=" color:red; float:right;"></i>
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('dob', '', ['id' => 'dob', 'class' => 'form-control form-control-inline input-medium', 'placeholder' => 'Date of Birth', 'autocomplete' => 'off', 'required']) }}
                            </div>
                        </div> <!-- /form-group-->

                        <!-- gender -->
                        <div class="form-group">
                            {{ Form::label('gender', 'Gender', ['class' => 'col-sm-3 control-label']) }}<i class="fa fa-asterisk" style=" color:red; float:right;"></i>
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{  Form::select( //SELECT FORM
                                        'gender', //name
                                        array( //options
                                                '' => '~~SELECT~~',
                                                'Male' => 'Male',
                                                'Female' => 'Female',

                                            ),
                                        '', //value
                                        ['id' => 'gender', 'class' => 'form-control', 'required'] //attributes
                                    )
                                }}
                            </div>
                        </div>
                        <!-- /gender -->
                    </div>

                    <div class="col-md-offset-1 col-md-5">
                        <!-- nationality -->
                        <div class="form-group">
                            {{ Form::label('nationality', 'Nationality', ['class' => 'col-sm-3 control-label']) }}<i class="fa fa-asterisk" style=" color:red; float:right;"></i>
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{  Form::select( //SELECT FORM
                                        'nationality', //name
                                        array(),
                                        '', //value
                                        ['id'=> 'nationality', 'class' => 'form-control', 'required'] //attributes
                                    )
                                }}
                            </div>
                        </div>
                        <!-- /nationality -->

                        <div class="form-group">
                            {{ Form::label('nrc', 'NRC Number', ['class' => 'col-sm-3 control-label']) }}<i class="fa fa-asterisk" style=" color:red; float:right;"></i>
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('nrc', '', ['class' => 'form-control', 'id' => 'nrc', 'placeholder' => 'NRC Number', 'autocomplete' => 'off']) }}
                            </div>
                        </div> <!-- /form-group-->

                        <div class="form-group">
                            {{ Form::label('agent_phone_number', 'Phone Number', ['class' => 'col-sm-3 control-label']) }}<i class="fa fa-asterisk" style=" color:red; float:right;"></i>
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-md-8">
                                <div class="input-group input-large">
                                    {{  Form::select( //SELECT FORM
                                            'dial_code', //name
                                            array(),
                                            '+260', //value
                                            ['id' => 'dial_code', 'class' => 'form-control', 'required'] //attributes
                                        )
                                    }}

                                    <span class="input-group-addon"></span>
                                    {{ Form::text('phone_number', '', ['class' => 'form-control', 'id' => 'phone_number', 'placeholder' => 'Phone Number', 'autocomplete' => 'off', 'required']) }}
                                </div>

                            </div>
                        </div> <!-- /form-group-->

                        <div class="form-group">
                            {{ Form::label('email', 'Email', ['class' => 'col-sm-3 control-label']) }}<i class="fa fa-asterisk" style=" color:red; float:right;"></i>
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::email('email', '', ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email', 'autocomplete' => 'off']) }}
                            </div>
                        </div> <!-- /form-group-->

                        <div class="form-group">
                            {{ Form::label('residential_address', 'Residential Address', ['class' => 'col-sm-3 control-label']) }}<i class="fa fa-asterisk" style=" color:red; float:right;"></i>
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('residential_address', '', ['class' => 'form-control', 'id' => 'residential_address', 'placeholder' => 'Residential Address', 'autocomplete' => 'off']) }}
                            </div>
                        </div> <!-- /form-group-->

                        <div class="form-group">
                            {{ Form::label('postal_address', 'Postal Address', ['class' => 'col-sm-3 control-label']) }}
                            {{ Form::label('', ': ', ['class' => 'col-sm-1 control-label']) }}
                            <div class="col-sm-8">
                                {{ Form::text('postal_address', '', ['class' => 'form-control', 'id' => 'postal_address', 'placeholder' => 'Postal Address', 'autocomplete' => 'off']) }}
                            </div>
                        </div> <!-- /form-group-->
                    </div>
                </div>

            </div> <!-- /modal-body -->

            <div class="modal-footer editUserFooter">
                <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
                {{ Form::submit('Save Changes', ['class' => 'btn btn-primary', 'id' => 'editUserBtn', 'data-loading-text' => 'Loading...', 'autocomplete' => 'off']) }}
            </div> <!-- /modal-footer -->
        {!! Form::close() !!}
        <!-- /.form -->
        </div>
        <!-- /modal-content -->
    </div>
    <!-- /modal-dialog -->
</div>

