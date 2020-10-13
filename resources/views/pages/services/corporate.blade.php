@extends('layouts.default')

@section('head')
    @component('includes.head')
        @slot('title')
        Corporate and Commercial Cleaning | Done-Rite Cleaners 
        @endslot    
        @slot('description')
        Regardless of the size of your offices or commercial complex we have skill cleaning personnel to address your needs. We know that all potential clients cleaning requests are unique that’s why Done-Rite will design a plan fitting your requirements and budget. 
        @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.banner')
        @slot('modifier') banner--corporate @endslot
        @slot('title')
            Corporate and Commercial Cleaning
        @endslot
    @endcomponent
    @component('components.content')
    @slot('image') https://www.unijan.com/wp-content/uploads/2018/01/who-we-are.png @endslot
    @slot('title') Corporate and Commercial Cleaning @endslot
    @slot('text')
    Regardless of the size of your offices or commercial complex we have skill cleaning personnel to address your needs. We know that all potential clients cleaning requests are unique that’s why Done-Rite will design a plan fitting your requirements and budget. 
    <br><br>  
    <a href="{{ url('/request-a-quote') }}" class="hero__button">Request a Quote</a>    
    @endslot
@endcomponent 
@stop