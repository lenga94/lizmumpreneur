<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Youth Lead') }}</title>

        <!-- Favicons -->
        <link href="{{ asset('images/favicon.ico') }}" rel="icon">
        <link href="{{ asset('images/logo2') }}" rel="apple-touch-icon">

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('assests/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!--external css-->
        <link href="{{ asset('assests/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="{{ asset('assests/bootstrap-fileupload/bootstrap-fileupload.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assests/bootstrap-datepicker/css/datepicker.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assests/bootstrap-daterangepicker/daterangepicker.css') }}" />

        <!-- Custom styles for this template -->
        <link href="{{ asset('custom/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('custom/css/style-responsive.css') }}" rel="stylesheet">

        <!-- =======================================================
          Page Name: base.blade.php
          Author: Main Method
          Date: 19-05-2019
        ======================================================= -->
    </head>

    <body>

        @include('dashboards.intern.inc.components.sections.intern_personal_information_form_section')

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ asset('assests/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assests/bootstrap/js/bootstrap.min.js') }}"></script>
        <script class="include" type="text/javascript" src="{{ asset('assests/jquery.dcjqaccordion.2.7.js') }}"></script>
        <script src="{{ asset('assests/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('assests/jquery.nicescroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assests/jquery.sparkline.js') }}"></script>

        <!--common script for all pages-->
        <script src="{{ asset('assests/common-scripts.js') }}"></script>

        <script type="text/javascript" src="{{ asset('assests/bootstrap-fileupload/bootstrap-fileupload.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assests/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assests/bootstrap-daterangepicker/date.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assests/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assests/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assests/bootstrap-daterangepicker/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assests/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
        <script src="{{ asset('assests/advanced-form-components.js') }}"></script>

        <script>
            $(document).ready(function() {

                $('#dob').datepicker({
                    format: 'dd/mm/yyyy'
                });

                $("#nationality").change(function(){
                    //selection changed
                    console.log("Selected Value: "+ this.value);//this will give the selected option's value
                    var selectedValue = this.value;

                    var specificNationalitySection = $('#specific_nationality_section');
                    var specificNationality = $('#specific_nationality');

                    if(selectedValue == 'Other') {
                        specificNationalitySection.attr('style','display: block');
                        specificNationality.attr('required', true);

                    } else {
                        specificNationalitySection.attr('style','display: none');
                        specificNationality.val(null);
                        specificNationality.attr('required', false);
                    }

                });

            });
        </script>
    </body>

</html>
