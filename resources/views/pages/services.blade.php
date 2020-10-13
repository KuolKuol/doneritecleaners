@extends('layouts.default')
@section('head')
    @component('includes.head')
        @slot('title')
        Services | Done-Rite Cleaners 
        @endslot    
        @slot('description')
        Regardless of the size of your offices or commercial complex we have skill cleaning personnel to address your needs. We know that all potential clients cleaning requests are unique that’s why Done-Rite will design a plan fitting your requirements and budget.
        @endslot
    @endcomponent
@endsection



@section('content')
    @component('components.banner')
        @slot('modifier') banner--building @endslot
        @slot('title')
            JANITORIAL SERVICES
        @endslot
    @endcomponent
    @include('components.service-list')
@stop