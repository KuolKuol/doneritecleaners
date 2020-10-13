@extends('layouts.default')
@section('head')
    @component('includes.head')
        @slot('title')
        About | Done-Rite Cleaners 
        @endslot    
        @slot('description')
        Our elite team of cleaners take pride in their work their collective average years of experiences is ten years (10 years). We are license, bonded and insured with two millions dollars liability insurance to protect clients and ourselves
        @endslot
    @endcomponent
@endsection
@section('content')
    
    @component('components.banner')
        @slot('modifier') banner--building @endslot
        @slot('title')
            About Us
        @endslot
    @endcomponent

    <section class="content" id="content--about">
        <div class="content__container">
            <img src="https://www.unijan.com/wp-content/uploads/2018/01/who-we-are.png" alt="" class="content__image">
            <div class="content__section">
                <h1 class="content__heading">About Done-Rite</h1>
                <p class="content__paragraph">   Our elite team of cleaners take pride in their work their collective average years of experiences is ten years (10 years). We are license, bonded and insured with two millions dollars liability insurance to protect clients and ourselves
                </p>
                    <br><br>  
                    <a href="{{ url('/request-a-quote') }}" class="hero__button">Request a Quote</a>
            </div>
        </div>
    </section>



@stop