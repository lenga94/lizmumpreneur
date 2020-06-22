<div class="container col-lg-12">
    <div class="panel-body">
        {!! Form::open(['route' => ['internUploadsAndInternApplication'], 'method' => 'POST', 'class' => 'form-horizontal style-form', 'id' => 'attachInternUploadsForm', 'enctype' => 'multipart/form-data']) !!}

        <div class="attach-personal-information-messages"></div>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <!-- nrc -->
                <div class="form-group" style="padding: 15px">
                    {{ Form::label('nrc', 'Attach Copy of Your National Registration Card', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::file('nrc', ['class' => 'default', 'id' => 'nrc', 'required']) }}
                    </div>
                </div>
                <!-- \nrc -->


                <!-- academic qualification -->
                <div class="form-group" style="padding: 15px">
                    {{ Form::label('academic_qualification', 'Attach Copy of Your Highest Academic Qualification', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::file('academic_qualification', ['class' => 'default', 'id' => 'academic_qualification', 'required']) }}
                    </div>
                </div>
                <!-- \academic qualification -->



            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">

                <!-- cv -->
                <div class="form-group" style="padding: 15px">
                    {{ Form::label('cv', 'Attach copy of Your Curriculum Vitae', ['class' => 'col-sm-12 control-label']) }}
                    <div class="col-sm-12">
                        {{ Form::file('cv', ['class' => 'default', 'id' => 'cv', 'required']) }}
                    </div>
                </div>
                <!-- \cv -->


            </div>
        </div>

        <div class="modal-footer" style="border-top: 0px">
            <button type="button" class="btn btn-warning"> << Previous</button>
            {!! Form::submit('Finish', ['class' => 'btn btn-success', 'id' => 'attachInternUploadsFormBtn']) !!}
        </div>

        {!! Form::close() !!}

    </div>
</div>



