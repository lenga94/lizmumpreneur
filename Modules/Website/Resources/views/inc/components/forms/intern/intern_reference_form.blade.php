<div class="container col-lg-12">
    <div class="panel-body">
        {!! Form::open(['route' => ['storeTempInternReferences'], 'method' => 'POST', 'class' => 'form-horizontal style-form', 'id' => 'attachReferencesForm']) !!}
        <div>
            <div>
                <div class="row justify-content-center">
                    <span class="h6 text-color ">First Reference</span><br>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">

                        <!-- Referee Name -->
                        <div class="form-group">
                            {{ Form::label('referee_name_1', 'Referee Name 1', ['class' => 'col-sm-12 control-label']) }}
                            <div class="col-sm-12">
                                {{ Form::text('referee_name_1', '', ['class' => 'form-control', 'id' => 'referee_name_1', 'placeholder' => 'Referee Name', 'autocomplete' => 'off', 'required']) }}
                            </div>
                        </div>
                        <!-- /Referee Name -->

                        <!-- Organisation of Referee   -->
                        <div class="form-group">
                            {{ Form::label('referee_organisation_1', 'Organisation of Referee 1', ['class' => 'col-sm-12 control-label']) }}
                            <div class="col-sm-12">
                                {{ Form::text('referee_organisation_1', '', ['class' => 'form-control', 'id' => 'referee_organisation_1', 'placeholder' => 'Organisation of Referee', 'autocomplete' => 'off', 'required']) }}
                            </div>
                        </div>
                        <!-- /Organisation of Referee -->

                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">

                        <!-- Phone Number of Referee -->
                        <div class="form-group">
                            {{ Form::label('referee_contact_1', 'Referee Contact Number 1', ['class' => 'col-sm-12 control-label']) }}
                            <div class="col-md-12">
                                <div class="input-group input-large">
                                    {{  Form::select( //SELECT FORM
                                            'dial_code_1', //name
                                            $dialCodes,
                                        '249', //value
                                            ['id' => 'dial_code_1', 'class' => 'form-control', 'required'] //attributes
                                        )
                                    }}

                                    <span class="input-group-addon"></span>
                                    {{ Form::number('referee_contact_1', '', ['class' => 'form-control', 'id' => 'referee_contact_1', 'placeholder' => 'Phone Number', 'autocomplete' => 'off', 'required']) }}
                                </div>

                            </div>
                        </div>
                        <!-- /Phone Number of Referee-->

                    </div>
                </div>
            </div>

            <div>
                <div class="row justify-content-center">
                    <span class="h6 text-color ">Second Reference</span><br>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">

                        <!-- Referee Name -->
                        <div class="form-group">
                            {{ Form::label('referee_name_2', 'Referee Name 2', ['class' => 'col-sm-12 control-label']) }}
                            <div class="col-sm-12">
                                {{ Form::text('referee_name_2', '', ['class' => 'form-control', 'id' => 'referee_name_2', 'placeholder' => 'Referee Name', 'autocomplete' => 'off', 'required']) }}
                            </div>
                        </div>
                        <!-- /Referee Name -->

                        <!-- Organisation of Referee -->
                        <div class="form-group">
                            {{ Form::label('referee_organisation_2', 'Organisation of Referee 2', ['class' => 'col-sm-12 control-label']) }}
                            <div class="col-sm-12">
                                {{ Form::text('referee_organisation_2', '', ['class' => 'form-control', 'id' => 'referee_organisation_2', 'placeholder' => 'Organisation of Referee', 'autocomplete' => 'off', 'required']) }}
                            </div>
                        </div>
                        <!-- /Organisation of Referee -->

                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">

                        <!-- Phone Number of Referee -->
                        <div class="form-group">
                            {{ Form::label('referee_contact_2', 'Referee Contact Number', ['class' => 'col-sm-12 control-label']) }}
                            <div class="col-md-12">
                                <div class="input-group input-large">
                                    {{  Form::select( //SELECT FORM
                                            'dial_code_2', //name
                                            $dialCodes,
                                        '249', //value
                                            ['id' => 'dial_code_2', 'class' => 'form-control', 'required'] //attributes
                                        )
                                    }}
                                    <span class="input-group-addon"></span>
                                    {{ Form::number('referee_contact_2', '', ['class' => 'form-control', 'id' => 'referee_contact_2', 'placeholder' => 'Phone Number', 'autocomplete' => 'off', 'required']) }}
                                </div>

                            </div>
                        </div>
                        <!-- /Phone Number of Referee -->

                    </div>
                </div>
            </div>

            <div>
                <div class="row justify-content-center">
                    <span class="h6 text-color ">Third Reference</span><br>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">

                        <!-- Referee Name -->
                        <div class="form-group">
                            {{ Form::label('referee_name_3', 'Referee Name 3', ['class' => 'col-sm-12 control-label']) }}
                            <div class="col-sm-12">
                                {{ Form::text('referee_name_3', '', ['class' => 'form-control', 'id' => 'referee_name_3', 'placeholder' => 'Referee Name', 'autocomplete' => 'off', 'required']) }}
                            </div>
                        </div>
                        <!-- /Referee Name -->

                        <!-- Organisation of Referee -->
                        <div class="form-group">
                            {{ Form::label('referee_organisation_3', 'Organisation of Referee 3', ['class' => 'col-sm-12 control-label']) }}
                            <div class="col-sm-12">
                                {{ Form::text('referee_organisation_3', '', ['class' => 'form-control', 'id' => 'referee_organisation_3', 'placeholder' => 'Organisation of Referee', 'autocomplete' => 'off', 'required']) }}
                            </div>
                        </div>
                        <!-- /Organisation of Referee -->

                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">

                        <!-- Phone Number of Referee-->
                        <div class="form-group">
                            {{ Form::label('referee_contact_3', 'Referee Contact Number 3', ['class' => 'col-sm-12 control-label']) }}
                            <div class="col-md-12">
                                <div class="input-group input-large">
                                    {{  Form::select( //SELECT FORM
                                            'dial_code_3', //name
                                            $dialCodes,
                                        '249', //value
                                            ['id' => 'dial_code_3', 'class' => 'form-control', 'required'] //attributes
                                        )
                                    }}

                                    <span class="input-group-addon"></span>
                                    {{ Form::number('referee_contact_3', '', ['class' => 'form-control', 'id' => 'referee_contact_3', 'placeholder' => 'Phone Number', 'autocomplete' => 'off', 'required']) }}
                                </div>

                            </div>
                        </div>
                        <!-- /Phone Number of Referee-->

                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer" style="border-top: 0px">
            <div class="modal-footer" style="border-top: 0px">
                <button type="button" class="btn btn-warning"> << Previous</button>
                {!! Form::submit('Next', ['class' => 'btn btn-primary', 'id' => 'attachReferencesFormBtn']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
