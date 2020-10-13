@extends('layouts.default')

@section('head')
    @component('includes.head')
        @slot('title')
        Building Maintenance | Done-Rite Cleaners 
        @endslot    
        @slot('description')
        We provide tailor- made cost effective solutions to meet all your maintenance needs weather it is a condo or apartment complex you can count on us for reliable professional property maintenance service. A good preventive program, plan can avoid costly repairs and save you money we are bonded, insured and work with any size budgets small or large.
        @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.banner')
        @slot('modifier') banner--building @endslot
        @slot('title')
            Building Maintenance
        @endslot
    @endcomponent
    @component('components.content')
    @slot('image') https://www.unijan.com/wp-content/uploads/2018/01/who-we-are.png @endslot
    @slot('title') Building Maintenance @endslot
    @slot('text')

    We provide tailor- made cost effective solutions to meet all your maintenance needs weather it is a condo or apartment complex you can count on us for reliable professional property maintenance service. A good preventive program, plan can avoid costly repairs and save you money we are bonded, insured and work with any size budgets small or large.
    <br><br>  
    <a href="{{ url('/request-a-quote') }}" class="hero__button">Request a Quote</a>

    
    @endslot
@endcomponent
@stop