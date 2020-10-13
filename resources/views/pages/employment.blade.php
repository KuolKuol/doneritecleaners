@extends('layouts.default')

@section('head')
    @component('includes.head')
        @slot('title')
        Employment | Done-Rite Cleaners 
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
          Employment
        @endslot
    @endcomponent


    
{{-- <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet"> --}}
{{-- <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js') }}"></script> --}}
    
    <div class="contact-form__container">

        <header class="contact-form__header">
            
            @if ( isset($session) && $session == 'success')
                <h6 class="success animate__animated animate__shakeX">Success: We recieved your email</h6>
            @endif

            @if (isset($session) && $session == 'error')
                <h6 class="success animate__animated animate__shakeX">Error: There was an error</h6>
            @endif

            <h1 class="contact-form__title">Employment Application</h1>
            <p class="contact-form__description">Please complete the form below to apply for a position with us. By submitting this form you are consenting that Done-Rite Cleaners may contact you by means of telephone or email.
            </p>
        </header>

        <form action="/employment-form.php" class="contact-form" id="contact-form" enctype="multipart/form-data" method="post">

            <span class="contact-form__error">{{ $errors->first('firstName') }}</span>

            <div class="form__input">
                <p class="form__input__title">First Name:</p>
                <input type="text" name="firstName" id="form__input--firstName" placeholder="First Name" class="form__input--name" value="{{ old('firstName')}}">
            </div>

            <span class="contact-form__error">{{ $errors->first('lastName') }}</span>

            <div class="form__input">
                <p class="form__input__title">Last Name:</p>
                <input type="text" name="lastName" id="form__input--lastName" placeholder="Last Name" class="form__input--name" value="{{ old('lastName')}}">
            </div>

            <span class="contact-form__error">{{ $errors->first('address') }}</span>

            <div class="form__input">
                <p class="form__input__title">Current Address:</p>
                <input type="text" name="address" id="form__input--address" placeholder="Street Address" class="form__input--name" value="{{ old('address')}}">
            </div>

            <span class="contact-form__error">{{ $errors->first('addressLineTwo') }}</span>

            <div class="form__input">
                <p class="form__input__title">Line 2:</p>
                <input type="text" name="addressLineTwo" id="form__input--addressLineTwo" placeholder="Street Address" class="form__input--name" value="{{ old('addressLineTwo')}}">
            </div>

            <span class="contact-form__error">{{ $errors->first('city') }}</span>

            <div class="form__input">
                <p class="form__input__title">City:</p>
                <input type="text" name="city" id="form__input--city" placeholder="City" class="form__input--name" value="{{ old('city')}}">
            </div>

            <span class="contact-form__error">{{ $errors->first('province') }}</span>

            <div class="form__input">
                <p class="form__input__title">Province:</p>
                <input type="text" name="province" id="form__input--province" placeholder="Province" class="form__input--name" value="{{ old('province')}}">
            </div>

            <span class="contact-form__error">{{ $errors->first('postalCode') }}</span>

            <div class="form__input">
                <p class="form__input__title">Postal Code:</p>
                <input type="text" name="postalCode" id="form__input--postalCode" placeholder="Postal Code" class="form__input--name" value="{{ old('postalCode')}}">
            </div>
                  
            <span class="contact-form__error">{{ $errors->first('email') }}</span>

            <div class="form__input">
                <p class="form__input__title">Email Address:</p>
                <input type="email" name="email" id="form__input--email" placeholder="Email Address" class="form__input--email" value="{{ old('email')}}">
            </div>

            <span class="contact-form__error">{{ $errors->first('phoneNumber') }}</span>

            <div class="form__input">
                <p class="form__input__title">Phone Number:</p>
                <input type="text" name="phoneNumber" id="form__input--phoneNumber" placeholder="Phone Number" class="form__input--email" value="{{ old('phoneNumber')}}">
            </div>

            <span class="contact-form__error">{{ $errors->first('felony') }}</span>

            <div class="form__input form__input--radio">
                <p class="form__input__title form__input__title--rc">Have you ever been convicted of a felony or misdemeanour offence?</p>
                <div class="form__input--radio">
                    <span>
                        <input type="radio" id="felonyYes" name="felony" value="Yes">
                        <label for="felonyYes">Yes</label>
                    </span>
                    <span>
                        <input type="radio" id="felonyNo" name="felony" value="No">
                        <label for="felonyNo">No</label><br>
                    </span>
                </div>
            </div>
                
            <span class="contact-form__error">{{ $errors->first('experience') }}</span>

            <div class="form__input form__input--radio">
                <p class="form__input__title form__input__title--rc">How years of cleaning experienced you have?</p>
                <div class="form__input--radio">
                    <select id="input_18_1_0" class="form-dropdown" name="experience" style="width:100%;box-sizing:border-box" value="{{old('experience')}}">
                        <option></option>
                        <option value="0 - 6 months "> 0 - 6 months </option>
                        <option value="6 months - 1 Yr"> 6 months - 1 Yr </option>
                        <option value="2 Yr - 5 Yr "> 2 Yr - 5 Yr </option>
                    </select>
                </div>
            </div>

            <span class="contact-form__error">{{ $errors->first('vehicle') }}</span>

            <div class="form__input form__input--radio">
                <p class="form__input__title form__input__title--rc">Do you have regular access to a personal vehicle?</p>
                <div class="form__input--radio">
                    <span>
                        <input type="radio" id="vehicleYes" name="vehicle" value="Yes">
                        <label for="vehicleYes">Yes</label>
                    </span>
                    <span>
                        <input type="radio" id="vehicleNo" name="vehicle" value="No">
                        <label for="vehicleNo">No</label><br>
                    </span>
                </div>
            </div>

            <span class="contact-form__error">{{ $errors->first('availability') }}</span>

            <div class="form__input form__input--radio">
                <p class="form__input__title form__input__title--rc">Are you available at any time?</p>
                <div class="form__input--radio">
                    <span>
                        <input type="radio" id="availabilityYes" name="availability" value="Yes">
                        <label for="availabilityYes">Yes</label>
                    </span>
                    <span>
                        <input type="radio" id="availabilityNo" name="availability" value="No">
                        <label for="availabilityNo">No</label><br>
                    </span>
                </div>
            </div>
                
            <div class="form__input form__input--radio">
                <p class="form__input__title form__input__title--rc">If you are not available at any time, please let us know your availability</p>
                <div class="form__input--radio">
                    <div id="cid_18" class="form-input-wide">
                    <table summary="" cellPadding="4" cellSpacing="0">
                        <tbody>
                        <tr>
                            <th style="border:none">
                            </th>
                            <th>
                            From
                            </th>
                            <th>
                            To
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align:left">
                            Monday
                            </th>
                            <td style="text-align:center">
                            <select name="mondayFrom" style="width:100%;box-sizing:border-box">
                                <option>  </option>
                                <option value="5:00 AM"> 5:00 AM </option>
                                <option value="6:00 AM"> 6:00 AM </option>
                                <option value="7:00 AM"> 7:00 AM </option>
                                <option value="8:00 AM"> 8:00 AM </option>
                                <option value="9:00 AM"> 9:00 AM </option>
                                <option value="10:00 AM"> 10:00 AM </option>
                                <option value="11:00 AM"> 11:00 AM </option>
                                <option value="12:00 PM"> 12:00 PM </option>
                                <option value="1:00 PM"> 1:00 PM </option>
                                <option value="2:00 PM"> 2:00 PM </option>
                                <option value="3:00 PM"> 3:00 PM </option>
                                <option value="4:00 PM"> 4:00 PM </option>
                                <option value="5:00 PM"> 5:00 PM </option>
                                <option value="6:00 PM"> 6:00 PM </option>
                                <option value="7:00 PM"> 7:00 PM </option>
                                <option value="8:00 PM"> 8:00 PM </option>
                                <option value="9:00 PM"> 9:00 PM </option>
                                <option value="10:00 PM"> 10:00 PM </option>
                                <option value="11:00 PM"> 11:00 PM </option>
                                <option value="Midnight"> Midnight </option>
                            </select>
                            </td>
                            <td style="text-align:center">
                            <select name="mondayTo" style="width:100%;box-sizing:border-box">
                                <option>  </option>
                                <option value="5:00 AM"> 5:00 AM </option>
                                <option value="6:00 AM"> 6:00 AM </option>
                                <option value="7:00 AM"> 7:00 AM </option>
                                <option value="8:00 AM"> 8:00 AM </option>
                                <option value="9:00 AM"> 9:00 AM </option>
                                <option value="10:00 AM"> 10:00 AM </option>
                                <option value="11:00 AM"> 11:00 AM </option>
                                <option value="12:00 PM"> 12:00 PM </option>
                                <option value="1:00 PM"> 1:00 PM </option>
                                <option value="2:00 PM"> 2:00 PM </option>
                                <option value="3:00 PM"> 3:00 PM </option>
                                <option value="4:00 PM"> 4:00 PM </option>
                                <option value="5:00 PM"> 5:00 PM </option>
                                <option value="6:00 PM"> 6:00 PM </option>
                                <option value="7:00 PM"> 7:00 PM </option>
                                <option value="8:00 PM"> 8:00 PM </option>
                                <option value="9:00 PM"> 9:00 PM </option>
                                <option value="10:00 PM"> 10:00 PM </option>
                                <option value="11:00 PM"> 11:00 PM </option>
                                <option value="Midnight"> Midnight </option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left">
                            Tuesday
                            </th>
                            <td style="text-align:center">
                            <select name="tuesdayFrom" style="width:100%;box-sizing:border-box">
                                <option>  </option>
                                <option value="5:00 AM"> 5:00 AM </option>
                                <option value="6:00 AM"> 6:00 AM </option>
                                <option value="7:00 AM"> 7:00 AM </option>
                                <option value="8:00 AM"> 8:00 AM </option>
                                <option value="9:00 AM"> 9:00 AM </option>
                                <option value="10:00 AM"> 10:00 AM </option>
                                <option value="11:00 AM"> 11:00 AM </option>
                                <option value="12:00 PM"> 12:00 PM </option>
                                <option value="1:00 PM"> 1:00 PM </option>
                                <option value="2:00 PM"> 2:00 PM </option>
                                <option value="3:00 PM"> 3:00 PM </option>
                                <option value="4:00 PM"> 4:00 PM </option>
                                <option value="5:00 PM"> 5:00 PM </option>
                                <option value="6:00 PM"> 6:00 PM </option>
                                <option value="7:00 PM"> 7:00 PM </option>
                                <option value="8:00 PM"> 8:00 PM </option>
                                <option value="9:00 PM"> 9:00 PM </option>
                                <option value="10:00 PM"> 10:00 PM </option>
                                <option value="11:00 PM"> 11:00 PM </option>
                                <option value="Midnight"> Midnight </option>
                            </select>
                            </td>
                            <td style="text-align:center">
                            <select name="tuesdayTo" style="width:100%;box-sizing:border-box">
                                <option>  </option>
                                <option value="5:00 AM"> 5:00 AM </option>
                                <option value="6:00 AM"> 6:00 AM </option>
                                <option value="7:00 AM"> 7:00 AM </option>
                                <option value="8:00 AM"> 8:00 AM </option>
                                <option value="9:00 AM"> 9:00 AM </option>
                                <option value="10:00 AM"> 10:00 AM </option>
                                <option value="11:00 AM"> 11:00 AM </option>
                                <option value="12:00 PM"> 12:00 PM </option>
                                <option value="1:00 PM"> 1:00 PM </option>
                                <option value="2:00 PM"> 2:00 PM </option>
                                <option value="3:00 PM"> 3:00 PM </option>
                                <option value="4:00 PM"> 4:00 PM </option>
                                <option value="5:00 PM"> 5:00 PM </option>
                                <option value="6:00 PM"> 6:00 PM </option>
                                <option value="7:00 PM"> 7:00 PM </option>
                                <option value="8:00 PM"> 8:00 PM </option>
                                <option value="9:00 PM"> 9:00 PM </option>
                                <option value="10:00 PM"> 10:00 PM </option>
                                <option value="11:00 PM"> 11:00 PM </option>
                                <option value="Midnight"> Midnight </option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left" class="form-matrix-row-headers">
                            Wednesday
                            </th>
                            <td style="text-align:center">
                            <select name="wednesdayFrom" style="width:100%;box-sizing:border-box">
                                <option>  </option>
                                <option value="5:00 AM"> 5:00 AM </option>
                                <option value="6:00 AM"> 6:00 AM </option>
                                <option value="7:00 AM"> 7:00 AM </option>
                                <option value="8:00 AM"> 8:00 AM </option>
                                <option value="9:00 AM"> 9:00 AM </option>
                                <option value="10:00 AM"> 10:00 AM </option>
                                <option value="11:00 AM"> 11:00 AM </option>
                                <option value="12:00 PM"> 12:00 PM </option>
                                <option value="1:00 PM"> 1:00 PM </option>
                                <option value="2:00 PM"> 2:00 PM </option>
                                <option value="3:00 PM"> 3:00 PM </option>
                                <option value="4:00 PM"> 4:00 PM </option>
                                <option value="5:00 PM"> 5:00 PM </option>
                                <option value="6:00 PM"> 6:00 PM </option>
                                <option value="7:00 PM"> 7:00 PM </option>
                                <option value="8:00 PM"> 8:00 PM </option>
                                <option value="9:00 PM"> 9:00 PM </option>
                                <option value="10:00 PM"> 10:00 PM </option>
                                <option value="11:00 PM"> 11:00 PM </option>
                                <option value="Midnight"> Midnight </option>
                            </select>
                            </td>
                            <td style="text-align:center">
                            <select name="wednesdayTo" style="width:100%;box-sizing:border-box">
                                <option>  </option>
                                <option value="5:00 AM"> 5:00 AM </option>
                                <option value="6:00 AM"> 6:00 AM </option>
                                <option value="7:00 AM"> 7:00 AM </option>
                                <option value="8:00 AM"> 8:00 AM </option>
                                <option value="9:00 AM"> 9:00 AM </option>
                                <option value="10:00 AM"> 10:00 AM </option>
                                <option value="11:00 AM"> 11:00 AM </option>
                                <option value="12:00 PM"> 12:00 PM </option>
                                <option value="1:00 PM"> 1:00 PM </option>
                                <option value="2:00 PM"> 2:00 PM </option>
                                <option value="3:00 PM"> 3:00 PM </option>
                                <option value="4:00 PM"> 4:00 PM </option>
                                <option value="5:00 PM"> 5:00 PM </option>
                                <option value="6:00 PM"> 6:00 PM </option>
                                <option value="7:00 PM"> 7:00 PM </option>
                                <option value="8:00 PM"> 8:00 PM </option>
                                <option value="9:00 PM"> 9:00 PM </option>
                                <option value="10:00 PM"> 10:00 PM </option>
                                <option value="11:00 PM"> 11:00 PM </option>
                                <option value="Midnight"> Midnight </option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left">
                            Thursday
                            </th>
                            <td style="text-align:center">
                            <select name="thursdayFrom" style="width:100%;box-sizing:border-box">
                                <option>  </option>
                                <option value="5:00 AM"> 5:00 AM </option>
                                <option value="6:00 AM"> 6:00 AM </option>
                                <option value="7:00 AM"> 7:00 AM </option>
                                <option value="8:00 AM"> 8:00 AM </option>
                                <option value="9:00 AM"> 9:00 AM </option>
                                <option value="10:00 AM"> 10:00 AM </option>
                                <option value="11:00 AM"> 11:00 AM </option>
                                <option value="12:00 PM"> 12:00 PM </option>
                                <option value="1:00 PM"> 1:00 PM </option>
                                <option value="2:00 PM"> 2:00 PM </option>
                                <option value="3:00 PM"> 3:00 PM </option>
                                <option value="4:00 PM"> 4:00 PM </option>
                                <option value="5:00 PM"> 5:00 PM </option>
                                <option value="6:00 PM"> 6:00 PM </option>
                                <option value="7:00 PM"> 7:00 PM </option>
                                <option value="8:00 PM"> 8:00 PM </option>
                                <option value="9:00 PM"> 9:00 PM </option>
                                <option value="10:00 PM"> 10:00 PM </option>
                                <option value="11:00 PM"> 11:00 PM </option>
                                <option value="Midnight"> Midnight </option>
                            </select>
                            </td>
                            <td style="text-align:center">
                            <select name="thursdayTo" style="width:100%;box-sizing:border-box">
                                <option>  </option>
                                <option value="5:00 AM"> 5:00 AM </option>
                                <option value="6:00 AM"> 6:00 AM </option>
                                <option value="7:00 AM"> 7:00 AM </option>
                                <option value="8:00 AM"> 8:00 AM </option>
                                <option value="9:00 AM"> 9:00 AM </option>
                                <option value="10:00 AM"> 10:00 AM </option>
                                <option value="11:00 AM"> 11:00 AM </option>
                                <option value="12:00 PM"> 12:00 PM </option>
                                <option value="1:00 PM"> 1:00 PM </option>
                                <option value="2:00 PM"> 2:00 PM </option>
                                <option value="3:00 PM"> 3:00 PM </option>
                                <option value="4:00 PM"> 4:00 PM </option>
                                <option value="5:00 PM"> 5:00 PM </option>
                                <option value="6:00 PM"> 6:00 PM </option>
                                <option value="7:00 PM"> 7:00 PM </option>
                                <option value="8:00 PM"> 8:00 PM </option>
                                <option value="9:00 PM"> 9:00 PM </option>
                                <option value="10:00 PM"> 10:00 PM </option>
                                <option value="11:00 PM"> 11:00 PM </option>
                                <option value="Midnight"> Midnight </option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left">
                            Friday
                            </th>
                            <td style="text-align:center">
                            <select name="fridayFrom" style="width:100%;box-sizing:border-box">
                                <option>  </option>
                                <option value="5:00 AM"> 5:00 AM </option>
                                <option value="6:00 AM"> 6:00 AM </option>
                                <option value="7:00 AM"> 7:00 AM </option>
                                <option value="8:00 AM"> 8:00 AM </option>
                                <option value="9:00 AM"> 9:00 AM </option>
                                <option value="10:00 AM"> 10:00 AM </option>
                                <option value="11:00 AM"> 11:00 AM </option>
                                <option value="12:00 PM"> 12:00 PM </option>
                                <option value="1:00 PM"> 1:00 PM </option>
                                <option value="2:00 PM"> 2:00 PM </option>
                                <option value="3:00 PM"> 3:00 PM </option>
                                <option value="4:00 PM"> 4:00 PM </option>
                                <option value="5:00 PM"> 5:00 PM </option>
                                <option value="6:00 PM"> 6:00 PM </option>
                                <option value="7:00 PM"> 7:00 PM </option>
                                <option value="8:00 PM"> 8:00 PM </option>
                                <option value="9:00 PM"> 9:00 PM </option>
                                <option value="10:00 PM"> 10:00 PM </option>
                                <option value="11:00 PM"> 11:00 PM </option>
                                <option value="Midnight"> Midnight </option>
                            </select>
                            </td>
                            <td style="text-align:center">
                            <select name="fridayTo" style="width:100%;box-sizing:border-box">
                                <option>  </option>
                                <option value="5:00 AM"> 5:00 AM </option>
                                <option value="6:00 AM"> 6:00 AM </option>
                                <option value="7:00 AM"> 7:00 AM </option>
                                <option value="8:00 AM"> 8:00 AM </option>
                                <option value="9:00 AM"> 9:00 AM </option>
                                <option value="10:00 AM"> 10:00 AM </option>
                                <option value="11:00 AM"> 11:00 AM </option>
                                <option value="12:00 PM"> 12:00 PM </option>
                                <option value="1:00 PM"> 1:00 PM </option>
                                <option value="2:00 PM"> 2:00 PM </option>
                                <option value="3:00 PM"> 3:00 PM </option>
                                <option value="4:00 PM"> 4:00 PM </option>
                                <option value="5:00 PM"> 5:00 PM </option>
                                <option value="6:00 PM"> 6:00 PM </option>
                                <option value="7:00 PM"> 7:00 PM </option>
                                <option value="8:00 PM"> 8:00 PM </option>
                                <option value="9:00 PM"> 9:00 PM </option>
                                <option value="10:00 PM"> 10:00 PM </option>
                                <option value="11:00 PM"> 11:00 PM </option>
                                <option value="Midnight"> Midnight </option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left">
                            Saturday
                            </th>
                            <td style="text-align:center">
                            <select name="saturdayFrom" style="width:100%;box-sizing:border-box">
                                <option>  </option>
                                <option value="5:00 AM"> 5:00 AM </option>
                                <option value="6:00 AM"> 6:00 AM </option>
                                <option value="7:00 AM"> 7:00 AM </option>
                                <option value="8:00 AM"> 8:00 AM </option>
                                <option value="9:00 AM"> 9:00 AM </option>
                                <option value="10:00 AM"> 10:00 AM </option>
                                <option value="11:00 AM"> 11:00 AM </option>
                                <option value="12:00 PM"> 12:00 PM </option>
                                <option value="1:00 PM"> 1:00 PM </option>
                                <option value="2:00 PM"> 2:00 PM </option>
                                <option value="3:00 PM"> 3:00 PM </option>
                                <option value="4:00 PM"> 4:00 PM </option>
                                <option value="5:00 PM"> 5:00 PM </option>
                                <option value="6:00 PM"> 6:00 PM </option>
                                <option value="7:00 PM"> 7:00 PM </option>
                                <option value="8:00 PM"> 8:00 PM </option>
                                <option value="9:00 PM"> 9:00 PM </option>
                                <option value="10:00 PM"> 10:00 PM </option>
                                <option value="11:00 PM"> 11:00 PM </option>
                                <option value="Midnight"> Midnight </option>
                            </select>
                            </td>
                            <td style="text-align:center">
                            <select name="saturdayTo" style="width:100%;box-sizing:border-box">
                                <option>  </option>
                                <option value="5:00 AM"> 5:00 AM </option>
                                <option value="6:00 AM"> 6:00 AM </option>
                                <option value="7:00 AM"> 7:00 AM </option>
                                <option value="8:00 AM"> 8:00 AM </option>
                                <option value="9:00 AM"> 9:00 AM </option>
                                <option value="10:00 AM"> 10:00 AM </option>
                                <option value="11:00 AM"> 11:00 AM </option>
                                <option value="12:00 PM"> 12:00 PM </option>
                                <option value="1:00 PM"> 1:00 PM </option>
                                <option value="2:00 PM"> 2:00 PM </option>
                                <option value="3:00 PM"> 3:00 PM </option>
                                <option value="4:00 PM"> 4:00 PM </option>
                                <option value="5:00 PM"> 5:00 PM </option>
                                <option value="6:00 PM"> 6:00 PM </option>
                                <option value="7:00 PM"> 7:00 PM </option>
                                <option value="8:00 PM"> 8:00 PM </option>
                                <option value="9:00 PM"> 9:00 PM </option>
                                <option value="10:00 PM"> 10:00 PM </option>
                                <option value="11:00 PM"> 11:00 PM </option>
                                <option value="Midnight"> Midnight </option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left">
                            Sunday
                            </th>
                            <td style="text-align:center">
                            <select name="sundayFrom" style="width:100%;box-sizing:border-box">
                                <option>  </option>
                                <option value="5:00 AM"> 5:00 AM </option>
                                <option value="6:00 AM"> 6:00 AM </option>
                                <option value="7:00 AM"> 7:00 AM </option>
                                <option value="8:00 AM"> 8:00 AM </option>
                                <option value="9:00 AM"> 9:00 AM </option>
                                <option value="10:00 AM"> 10:00 AM </option>
                                <option value="11:00 AM"> 11:00 AM </option>
                                <option value="12:00 PM"> 12:00 PM </option>
                                <option value="1:00 PM"> 1:00 PM </option>
                                <option value="2:00 PM"> 2:00 PM </option>
                                <option value="3:00 PM"> 3:00 PM </option>
                                <option value="4:00 PM"> 4:00 PM </option>
                                <option value="5:00 PM"> 5:00 PM </option>
                                <option value="6:00 PM"> 6:00 PM </option>
                                <option value="7:00 PM"> 7:00 PM </option>
                                <option value="8:00 PM"> 8:00 PM </option>
                                <option value="9:00 PM"> 9:00 PM </option>
                                <option value="10:00 PM"> 10:00 PM </option>
                                <option value="11:00 PM"> 11:00 PM </option>
                                <option value="Midnight"> Midnight </option>
                            </select>
                            </td>
                            <td style="text-align:center">
                            <select name="sundayTo" style="width:100%;box-sizing:border-box">
                                <option>  </option>
                                <option value="5:00 AM"> 5:00 AM </option>
                                <option value="6:00 AM"> 6:00 AM </option>
                                <option value="7:00 AM"> 7:00 AM </option>
                                <option value="8:00 AM"> 8:00 AM </option>
                                <option value="9:00 AM"> 9:00 AM </option>
                                <option value="10:00 AM"> 10:00 AM </option>
                                <option value="11:00 AM"> 11:00 AM </option>
                                <option value="12:00 PM"> 12:00 PM </option>
                                <option value="1:00 PM"> 1:00 PM </option>
                                <option value="2:00 PM"> 2:00 PM </option>
                                <option value="3:00 PM"> 3:00 PM </option>
                                <option value="4:00 PM"> 4:00 PM </option>
                                <option value="5:00 PM"> 5:00 PM </option>
                                <option value="6:00 PM"> 6:00 PM </option>
                                <option value="7:00 PM"> 7:00 PM </option>
                                <option value="8:00 PM"> 8:00 PM </option>
                                <option value="9:00 PM"> 9:00 PM </option>
                                <option value="10:00 PM"> 10:00 PM </option>
                                <option value="11:00 PM"> 11:00 PM </option>
                                <option value="Midnight"> Midnight </option>
                            </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 

            <span class="contact-form__error">{{ $errors->first('startDate') }}</span>

            <div class="form__input">
                <p class="form__input__title">Preferred start date:</p>
                <input type="date" name="startDate" id="form__input--startDate" class="form__input--name" value="">
            </div>

            <span class="contact-form__error">{{ $errors->first('message') }}</span>

            <div class="form__input form__input--radio">
                <p class="form__input__title form__input__title--rc">Do you have any special certifications that you would like to let us know about?</p>
                <div class="form__input--radio">
                    <textarea name="message" id="form__input--message" cols="30" rows="10" placeholder="Message" value="{{ old('message') }}" class="form__input--message"></textarea>
                </div>
            </div>

            <span class="contact-form__error">{{ $errors->first('resume') }}</span>

            <div class="form__input">
                <p class="form__input__title">Upload Resume:</p>
                <input type="file" id="resume" name="resume">
            </div>

            @csrf

            <div class="form__group">
                <button type="submit" class="contact-form__button">Submit</button>
            </div>

        </form>
    </div>
@stop