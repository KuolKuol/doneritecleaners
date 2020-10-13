@extends('layouts.default')

@section('head')
    @component('includes.head')
        @slot('title')
        Carpet Cleaning and Maintenance | Done-Rite Cleaners 
        @endslot    
        @slot('description')
        Of all the surfaces in a facility, there is none more difficult to keep clean and maintain, while ensuring a good visual appearance, than carpet. Developing an effective maintenance plan for your carpet is critical to its appearance and the lifecycle costs it will offer you.  So, maintenance of your carpet flooring is not just about cleaning; it is about managing an expensive asset.
        @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.banner')
        @slot('modifier') banner--building @endslot
        @slot('title')
            Carpet Cleaning and Maintenance
        @endslot
    @endcomponent
    @component('components.content')
    @slot('image') {{ asset('/images/carpets-before-after-01.jpg') }} @endslot
    @slot('title') Carpet Cleaning & Maintenance @endslot
    @slot('text')
    
Of all the surfaces in a facility, there is none more difficult to keep clean and maintain, while ensuring a good visual appearance, than carpet. Developing an effective maintenance plan for your carpet is critical to its appearance and the lifecycle costs it will offer you.  So, maintenance of your carpet flooring is not just about cleaning; it is about managing an expensive asset.
<br><br>  
<a href="{{ url('/request-a-quote') }}" class="hero__button">Request a Quote</a>
    @endslot
    @endcomponent
@stop