<div class="container col-lg-12">
    <div class="panel-body">
        {!! Form::open(['route' => ['storeTempInternRequests'], 'method' => 'POST', 'class' => 'form-horizontal style-form', 'id' => 'internRequestsForm']) !!}

        <div class="attach-intern-request-form-messages"></div>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">

                <!-- number of interns -->
                <div class="form-group">
                    {{ Form::label('number_of_interns', 'Select number of interns you would want to request for', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                            'number_of_interns', //name
                            array( //options
                                    '' => '~~SELECT~~',
                                    '1' => '1 Intern',
                                    '2' => '2 Interns',
                                    '3' => '3 Interns',
                                    '4' => '4 Interns',
                                    '5' => '5 Interns',
                                ),
                            '', //value
                            ['id' => 'number_of_interns', 'class' => 'form-control', 'required'] //attributes
                        )
                    }}
                    </div>
                </div>
                <!-- /number of interns -->
            </div>
        </div>
        <div id="terms_of_reference"></div>

        <div class="form-group">
            <p>By clicking Finish you are accepting the <a href="{{ route('termsAndConditionsPage') }}"><i>Conditions &
                        Requirements</i></a> Of YouthLead Activity</p>
        </div>

        <div class="modal-footer" style="border-top: 0px">
            <button type="button" id="internRequestsFormPreviousButton" class="btn btn-warning"> << Previous</button>
            {!! Form::submit('Finish', ['class' => 'btn btn-success', 'id' => 'internRequestFormsBtn']) !!}

        </div>
        {!! Form::close() !!}

    </div>
</div>
