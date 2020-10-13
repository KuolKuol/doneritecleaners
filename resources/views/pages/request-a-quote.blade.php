@extends('layouts.default')
@section('head')
    @component('includes.head')
        @slot('title')
        Request a Quote | Done-Rite Cleaners 
        @endslot    
        @slot('description')
            Request a Quote from Done-Rite Cleaners today. Regardless of the size of your offices or commercial complex we have skill cleaning personnel to address your needs. We know that all potential clients cleaning requests are unique that’s why Done-Rite will design a plan fitting your requirements and budget.
        @endslot
    @endcomponent
@endsection

@section('content')
    
    @component('components.banner')
        @slot('modifier') banner--building @endslot
        @slot('title')
          Request a Quote
        @endslot
    @endcomponent
    <div id='podium-integration'></div>
    <script>
    (function(p,o,d,i,u,m,r) {
    p['podium-integration']=u;p[u]= function() {(p[u].q=p[u].q||[]).push(arguments)},p[u].l=1*new Date();
    m=o.createElement(d),r=o.getElementsByTagName(d)[0];m.async=1;m.src=i+'?t='+1*new Date();r.parentNode.insertBefore(m,r)
    })(window,document,'script','//podiumio.com/int/podiumio.boot.min.js','podiumio');
    podiumio('podiumio','1e32bffc-9c9e-4d23-8ade-f9a6c747f6a0','booking','donerite-cleaners','en','cf57d635-72fb-47d5-9e98-aaf0730edf82');
    </script>
    
    {{-- <script type="text/javascript" src="https://form.jotform.com/jsform/201856076322251"></script> --}}
{{-- 
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    
  <div class="contact-form__container">

    <header class="contact-form__header">
        <h1 class="contact-form__title">Get A Quote</h1>
        <p class="contact-form__description">Please complete the form below to apply for a position with us. By submitting this form you are consenting that First Choice Non-Medical Home Care may contact you by means of telephone or email.
        </p>
    </header>

    <form action="#" class="contact-form" id="contact-form">

        <div class="form__input">
            <p class="form__input__title">Full Name:</p>
            <input type="text" name="name" id="form__input--name" placeholder="Full Name" class="form__input--name">
        </div>

        <div class="form__input">
            <p class="form__input__title">Email:</p>
            <input type="email" name="email" id="form__input--email" placeholder="Email Address" class="form__input--email">
        </div>

        <div class="form__input">
            <p class="form__input__title">Phone:</p>
            <input type="tel" name="tel" id="form__input--tel" placeholder="Phone Number" class="form__input--tel">

        </div>
            
        <div class="form__input">
            <p class="form__input__title">Subject:</p>
            <input type="text" name="subject" id="form__input--subject" placeholder="Subject" class="form__input--subject">
        </div>
        <div class="form__input">
            <p class="form__input__title">Message:</p>
            <textarea name="message" id="form__input--message" cols="30" rows="10" placeholder="Message" class="form__input--message"></textarea>
        </div>

        <div class="form__input form__input--radio">
            <p class="form__input__title form__input__title--rc">Residential or Commerical?</p>
            <div class="form__input--radio">
                <span>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Residential</label>
                </span>
                <span>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Commercial</label><br>
                </span>
            </div>
        </div>

        


        <div class="form__group">
            <button type="submit" class="contact-form__button">Submit</button>
        </div>

    </form>
      
  </div> --}}

    
@stop