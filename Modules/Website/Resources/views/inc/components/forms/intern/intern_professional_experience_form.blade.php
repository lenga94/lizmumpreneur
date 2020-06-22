<div class="container col-lg-12">
    <div class="panel-body">
        {!! Form::open(['route' => ['storeTempEmploymentExperience'], 'method' => 'POST', 'class' => 'form-horizontal style-form', 'id' => 'attachProfessionalExperienceForm']) !!}

        <div class="attach-personal-information-messages"></div>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">

                <!-- number of work experiences -->
                <div class="form-group">
                    {{ Form::label('number_of_work_experiences', 'Select the number of places you have volunteered, interned, worked as a full/part-time employee.(maximum three)', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{  Form::select( //SELECT FORM
                            'number_of_work_experiences', //name
                            array( //options
                                    '' => '~~SELECT~~',
                                    '0' => 'None',
                                    '1' => '1 place',
                                    '2' => '2 places',
                                    '3' => '3 places',

                                ),
                            '', //value
                            ['id' => 'number_of_work_experiences', 'class' => 'form-control', 'required'] //attributes
                        )
                    }}
                    </div>
                </div>
                <!-- /number of work experiences -->

            </div>

        </div>

        <div id="terms_of_reference"></div>

        <div class="modal-footer" style="border-top: 0px">
            <button type="button" class="btn btn-warning"> << Previous</button>
            {!! Form::submit('Next', ['class' => 'btn btn-primary', 'id' => 'attachProfessionalExperienceFormBtn']) !!}

        </div>
        {!! Form::close() !!}

    </div>
</div>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>

