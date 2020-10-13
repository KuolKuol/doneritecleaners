@extends('layouts.default')

@section('head')
    @component('includes.head')
        @slot('title')
        Office Cleaning | Done-Rite Cleaners 
        @endslot    
        @slot('description')
        First impressions count the initial evaluation a client/custom makes  when they walk into your office. They will decide in seconds if this a company or place they want to conduct their business. Cleanness is one of the unwritten factors that influences their decisions, cleanness can make or break a long-lasting business relationship which can affect a company’s revenue stream.  A clean workplace environment improves productivity, boosts employee’s retention and reduces employees’ sick days. 
        @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.banner')
        @slot('modifier') banner--office @endslot
        @slot('title')
            Office Cleaning
        @endslot
    @endcomponent
    @component('components.content')
    @slot('image') {{ asset('/images/canstockphoto27714702.jpg') }} @endslot
    @slot('title') Office Cleaning @endslot
    @slot('text')
    First impressions count the initial evaluation a client/custom makes  when they walk into your office. They will decide in seconds if this a company or place they want to conduct their business. Cleanness is one of the unwritten factors that influences their decisions, cleanness can make or break a long-lasting business relationship which can affect a company’s revenue stream.  A clean workplace environment improves productivity, boosts employee’s retention and reduces employees’ sick days. 
    <br><br>  
    <a href="{{ url('/request-a-quote') }}" class="hero__button">Request a Quote</a>
    @endslot
@endcomponent
@stop