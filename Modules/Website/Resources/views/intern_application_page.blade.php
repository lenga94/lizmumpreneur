@extends('website::layouts.base')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/jquery-ui/jquery-ui.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/steppers.css') }}" />
@endsection

@section('content')

    <!-- intern application form section -->
    @include('website::inc.components.sections.intern_application_form_section')
    <!-- /intern application form section -->

    <!-- terms and conditions modal -->
    @include('website::inc.components.modals.terms_and_conditions_modal')
    <!-- /terms and conditions modal -->

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('assests/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src={{ asset('assests/sweetalert.min.js') }}></script>
    <script src={{ asset('assests/sweetalert2.min.js') }}></script>
    <script type="text/javascript" src="{{ asset('custom/js/intern_application.js') }}"></script>
@endsection
