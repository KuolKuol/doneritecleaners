@extends('layouts.default')

@section('head')
    @component('includes.head')
        @slot('title')
        Construction Cleaning | Done-Rite Cleaners 
        @endslot    
        @slot('description')
        Construction site cleaning enhance safety decrease the risk of work-related injuries and accidents. That is why our professional cleaning teams make sure all working areas and passageway are free from waste and debris.  A professionally cleaned and maintained work site improve productivity by allowing employees to focus on their work instead of imminent dangers or hazard at their work environment thereby decreasing lost work hours.
        @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.banner')
        @slot('modifier') banner--construction @endslot
        @slot('title')
            Construction Cleaning
        @endslot
    @endcomponent
    @component('components.content')
    @slot('image') {{ asset('/images/construction-cleaning-services.jpg') }} @endslot
    @slot('title') Construction Cleaning @endslot
    @slot('text')
    <br>
    Construction site cleaning enhance safety decrease the risk of work-related injuries and accidents. That is why our professional cleaning teams make sure all working areas and passageway are free from waste and debris.  A professionally cleaned and maintained work site improve productivity by allowing employees to focus on their work instead of imminent dangers or hazard at their work environment thereby decreasing lost work hours.
<br>
<br>
    <b>
    We have the team to execute your cleanup plans weather its during constructions or post construction cleanup we will assist with.
    </b>
    <br/>  

    <ul class="list--construction">
        <li>Deal with contractors’ leftovers</li> 
        <li>Make marked hardwood floors presentable again</li>
        <li>Restore carpets from heavy traffic</li> 
        <li>Clean walls and baseboards</li> 
        <li>Restore view to windows and mirrors</li> 
        <li>Clean and replace defective light bulbs and switches</li>
        <li>Clean cabinets, draws and closets</li> 
        <li>Clean up exterior walkway</li> 
        <li>Execute your final detailing instructions</li> 
    </ul>
    <br><br>  
    <a href="{{ url('/request-a-quote') }}" class="hero__button">Request a Quote</a>
    @endslot
@endcomponent
@stop