@extends('layouts.default')

@section('head')
    @component('includes.head')
        @slot('title')
        Done-Rite Cleaners 
        @endslot    
        @slot('description')
        Request a Quote from Done-Rite Cleaners today. Regardless of the size of your offices or commercial complex we have skill cleaning personnel to address your needs. We know that all potential clients cleaning requests are unique that’s why Done-Rite will design a plan fitting your requirements and budget.
        @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.hero')
        @slot('title')
        Done-Rite <br> Cleaning Services
        @endslot
        @slot('text')
        If you are looking for reliable dependable professional cleaning services you are at the right place
        @endslot
        @slot('link')
            /request-a-quote
        @endslot
        @slot('button')
            Request a Quote
        @endslot
    @endcomponent


    <div class="cta">
        <div class="cta__container">
            <section class="cta__section">
                <h1 class="cta__heading">WELCOME GLAD YOU STOP BY</h1>
                <p class="cta__paragraph">If you are looking for reliable dependable professional cleaning services you are at the right place</p>
            </section>
           

            
            <section class="cta__section">
                <h2 class="cta__subheading">What we offer</h2>
                <div class="cta__list__group">
                    <ul class="cta__list">
                        <li class="cta__list__item">Solid reputation</li>
                        <li class="cta__list__item">Trustworthiness</li>
                        <li class="cta__list__item">Affordable rates</li>    
                    </ul>
                    <ul class="cta__list">
                        <li class="cta__list__item">No contract</li>
                        <li class="cta__list__item">Online booking</li>
                        <li class="cta__list__item">Free estimate</li>    
                    </ul>
                    {{-- <ul class="cta__list">
                        <li class="cta__list__item">Condominiums</li>
                        <li class="cta__list__item">Construction Cleaning</li>
                    </ul> --}}
                </div>
            </section> 
            
        </div>
    </div>

    <div class="service-area">
        <div class="service-area__container">
            <h1 class="service-area__title"><a href="{{url('./services')}}" class="service-area__title__link"> Our Cleaning Services</a></h1>
            <div class="service-area__panels">
                <div class="service-area__panel__group">
                    <div class="service-area__panel">
                        <img src="{{asset('images/4083897473_4cfd1f4ffd.jpg')}}" alt="" class="service-area__image">
                        <div class="service-area__panel__content">
                            <h1 class="service-area__panel__title">Corporate and Commercial Cleaning</h1>
                            <p class="service-area__panel-description">A complete range of commercial cleaning services...</p>
                            <a href="{{url('/services/corporate-commercial-cleaning')}}" class="service-area__panel__button">Read More</a>
                        </div>
                    </div>
                    <div class="service-area__panel">
                        <img src="{{asset('images/cleaning-equipment-l-3.jpg')}}" alt="" class="service-area__image">
                        <div class="service-area__panel__content">
                            <h1 class="service-area__panel__title">Building Maintenance</h1>
                            <p class="service-area__panel-description">The standard to which your building is maintained...</p>
                            <a href="{{ url('/services/building-maintenance') }}" class="service-area__panel__button">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="service-area__panel__group">
                    <div class="service-area__panel">
                        <img src="{{asset('/images/canstockphoto13694236.jpg')}}" alt="" class="service-area__image">
                        <div class="service-area__panel__content">
                            <h1 class="service-area__panel__title">Office Cleaning</h1>
                            <p class="service-area__panel-description">Create a cleaner, more productive work environment for your employees...</p>
                            <a href="{{ url('/services/office-cleaning') }}" class="service-area__panel__button">Read More</a>
                        </div>
                    </div>
                    <div class="service-area__panel">
                        <img src="https://www.unijan.com/wp-content/uploads/2018/01/carpet-care.png" alt="" class="service-area__image">
                        <div class="service-area__panel__content">
                            <h1 class="service-area__panel__title">Carpet Cleaning & Maintenance</h1>
                            <p class="service-area__panel-description">Utilizing industry leading carpet maintenance practices...</p>
                            <a href="{{ url('/services/carpet-cleaning') }}" class="service-area__panel__button">Read More</a>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>




@stop