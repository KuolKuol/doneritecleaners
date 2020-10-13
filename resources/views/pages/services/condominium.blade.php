@extends('layouts.default')

@section('head')
    @component('includes.head')
        @slot('title')
        Condominiums | Done-Rite Cleaners 
        @endslot    
        @slot('description')
        Premier quality care for your condo individual or corporate needs our packages are dynamic to accommodate exterior or interior projects.     
        @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.banner')
        @slot('modifier') banner--building @endslot
        @slot('title')
            Condominiums
        @endslot
    @endcomponent
    @component('components.content')
    @slot('image') https://www.unijan.com/wp-content/uploads/2018/01/who-we-are.png @endslot
    @slot('title') Condominiums @endslot
    @slot('text')

    <br>
    
    Premier quality care for your condo individual or corporate needs our packages are dynamic to accommodate exterior or interior projects.     
    <br><br>
    Taking a preventive approach when it comes to property management, there is a lot to consider to make sure you take a preventative approach. If you want to avoid major problems and expensive damage repairs, it is best to follow a preventive approach. This includes the carpets and flooring details. It is better to perform regular check-ups to make sure the lifespan of the condo unit is expanded. Condominium maintenance is much more cost-effective than having things completely replaced. Furthermore, proactive property management will save you a lot of time, effort, and money further down the line. At Done-Rite cleaners we have the team in place to assist you. 
    <br><br>  
    <a href="{{ url('/request-a-quote') }}" class="hero__button">Request a Quote</a>
    @endslot
@endcomponent
@stop