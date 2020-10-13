@extends('layouts.default')

@section('head')
    @component('includes.head')
        @slot('title')
        Floor Cleaning Services | Done-Rite Cleaners 
        @endslot    
        @slot('description')
        A good floor cleaning service plan will extend the longevity of your floors commercial or residential the following services are available. 
        @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.banner')
    @slot('modifier') banner--building @endslot
        @slot('title')
            Floor Cleaning Services
        @endslot
    @endcomponent
    @component('components.content')
    @slot('image') {{ asset('/images/WAL_HANDSCRAPED_031.jpg') }} @endslot
    @slot('title') Floor Cleaning Services @endslot
    @slot('text')
        A good floor cleaning service plan will extend the longevity of your floors commercial or residential the following services are available. 

        <ul class="list--construction">
            <li>Hardwood floor cleaning, scrubbing, and polishing</li>
            <li>Carpet Cleaning scrubbing, vacuuming, spot removing </li>
        </ul>
        <br><br>  
        <a href="{{ url('/request-a-quote') }}" class="hero__button">Request a Quote</a>
    @endslot
@endcomponent
@stop