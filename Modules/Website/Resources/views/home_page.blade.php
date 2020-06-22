@extends('website::layouts.base')

@section('content')

    <!-- slider start section -->
    @include('website::inc.components.sections.slider_start_section')
    <!-- /slider start section -->

    <!-- intro section -->
    @include('website::inc.components.sections.intro_section')
    <!-- /intro section -->

    <!-- about -->
    @include('website::inc.components.sections.capstone_section')
    <!-- /about -->

    <!-- counter section -->
    @include('website::inc.components.sections.counter_section')
    <!-- /counter section -->

    <!-- testimonial section -->
    @include('website::inc.components.sections.testimonial_section')
    <!-- /testimonial section -->

    <!-- news section -->
    @include('website::inc.components.sections.news_section')
    <!-- /news section -->

    <!-- services -->
    @include('website::inc.components.sections.services_section')
    <!-- /services -->

@endsection


