@extends('layout')

@section('content')
    @include('includes.hero')

    <main id="main">
        @include('includes.featured_services')
        @include('includes.about')
        @include('includes.why_us')
        @include('includes.client')
        @include('includes.services')
        @include('includes.cta') 
        @include('includes.portfolio')
        @include('includes.team')
        @include('includes.contact')
    </main>
@endsection
