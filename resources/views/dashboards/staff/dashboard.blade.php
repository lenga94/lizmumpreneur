@extends('layouts.base')

@section('navbar')
    @include('dashboards.staff.inc.staff_navbar')
@endsection

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/datatables/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/zabuto_calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/gritter/css/jquery.gritter.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/datatables/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assests/jquery-ui/jquery-ui.min.css') }}" />
@endsection

@section('head_scripts')
    <script src="{{ asset('assests/chart-master/Chart.js') }}"></script>
@endsection

@section('dashboard_active')
    <script type="text/javascript">
        var tag = document.getElementById('dashboard');
        tag.setAttribute("class","active");
    </script>
@endsection
@section('content')

@include('inc.components.sections.charts_section')
@endsection

@section('scripts')

    <!--script for this page-->
    <script type="text/javascript" src="{{ asset('assests/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assests/gritter/js/jquery.gritter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assests/gritter-conf.js') }}"></script>
    <script src="{{ asset('assests/sparkline-chart.js') }}"></script>
    <script src="{{ asset('assests/zabuto_calendar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('custom/js/index.js') }}"></script>
    <script src="{{ asset('assests/chart.js/Chart.min.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('assests/datatables/jquery.dataTables.min.js') }}"></script>

@endsection


