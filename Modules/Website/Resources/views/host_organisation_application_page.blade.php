@extends('website::layouts.base')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/jquery-ui/jquery-ui.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/steppers.css') }}" />
@endsection

@section('content')

    <!-- host organisation application form section -->
    @include('website::inc.components.sections.host_organisation_application_form_section')
    <!-- /host organisation application form section -->

    <!-- form -->
    <form id="store-application" action="{{ route('storeHostOrganisationApplication') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <!-- /form -->

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('assests/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src={{ asset('assests/sweetalert2.min.js') }}></script>
    <script type="text/javascript" src="{{ asset('custom/js/host_application.js') }}"></script>
@endsection
