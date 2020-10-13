<header class="header">
    <div class="header__container">

        <div class="header__logo">
            <a href="{{ url('/') }}" class="header__logo__link">
                <img src="/images/logo.jpg" class="header__logo__image" alt="" srcset="">
            </a>
        </div>

        <div class="header__group">

            <a href="" class="header__section">
                <i class="fas fa-phone-alt header__icon"></i>
                <div class="header__info">
                    <h2 class="header__info__sub-title">Phone Number</h2>
                    <p class="header__info__data"><a href="tel:4039930376" class="header__info__link">403-993-0376</a></p>
                </div>
            </a>

            <a href="" class="header__section">
                <i class="fas fa-envelope header__icon"></i>
                <div class="header__info">
                    <h2 class="header__info__sub-title">Email Address</h2>
                    <p class="header__info__data"><a href="mailto:info@doneritecleaners.com" class="header__info__link">info@doneritecleaners.com</a></p>
                </div>
            </a>
    
        </div>
    </div>
</header>

<div class="nav">
    
    <div class="hamburger" id="hamburger">
        <i class="fas fa-bars"></i>
    </div>

    <ul class="nav__list" id="nav__list">
        <li class="nav__list__item">
            <a href="{{ url('/') }}" class="nav__list__link">Home</a>
        </li>
        <li class="nav__list__item">
            <a href="{{ url('/about') }}" class="nav__list__link">About Us</a>
        </li>
        <li class="nav__list__item">
            <a href="{{ url('/services') }}" class="nav__list__link">Services</a>
        </li>
        <li class="nav__list__item">
            <a href="{{ url('/request-a-quote') }}" class="nav__list__link">Request a Quote</a>
        </li>
        <li class="nav__list__item">
            <a href="" class="nav__list__link nav__list__link--booking">Booking</a>
            <ul class="nav__list" id="nav__list">
                <li class="nav__list__item">
                    <a href="{{ url('/home-cleaning') }}" class="nav__list__link">Home Cleaning</a>
                </li>
                <li class="nav__list__item">
                    <a href="{{ url('/deep-clean') }}" class="nav__list__link">Deep Clean</a>
                </li>
                <li class="nav__list__item">
                    <a href="{{ url('/move') }}" class="nav__list__link">Move In/Move Out</a>
                </li>
                <li class="nav__list__item">
                    <a href="{{ url('/post-renovation') }}" class="nav__list__link">Post Renovation</a>
                </li>
                <li class="nav__list__item">
                    <a href="{{ url('/airbnb-Short-term-rental') }}" class="nav__list__link">Airbnb Short Term Rental</a>
                </li>
            </ul>
        </li>
        <li class="nav__list__item">
            <a href="{{ url('/employment') }}" class="nav__list__link">Employment</a>
        </li>
    </ul>
</div>  



<nav> 
    <div class="menu">
        <a href="{{ url('/') }}" class="link">Home</a>
        <a href="{{ url('/about') }}" class="link">About Us</a>
        <a href="{{ url('/services') }}" class="link">Services</a>
        <a href="{{ url('/request-a-quote') }}" class="link">Request a Quote</a>
        <div class="shop">
            <a href="#" class="link">Book Online</a> <!-- &blacktriangledown; -->
            <div class="drop">
                <div class="shirt">
                    <a href="{{ url('/#') }}">Commercial</a>
                    <div class="dropTwo">
                        <a href="{{ url('/post-renovation') }}">Post Renovation</a>
                        <a href="{{ url('/airbnb-Short-term-rental') }}">Airbnb Short Term Rental</a>
                    </div>
                </div>
                <div class="shirt">
                    <a href="#">Residential</a>
                    <div class="dropTwo">
                        <a href="{{ url('/home-cleaning') }}">Home Cleaning</a>
                        <a href="{{ url('/deep-clean') }}">Deep Cleaning</a>
                        <a href="{{ url('/move') }}">Move In/Move Out</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url('/employment') }}" class="link">Employment</a>
    </div>

</nav>

{{-- 
<nav class="nav--top">
    
    <div class="hamburger" id="hamburger">
        <i class="fas fa-bars"></i>
    </div>

    <ul class="nav__list" id="nav__list">
        <li class="nav__list__item">
            <a href="{{ url('/') }}" class="nav__list__link">Home</a>
        </li>
        <li class="nav__list__item">
            <a href="{{ url('/about') }}" class="nav__list__link">About Us</a>
        </li>
        <li class="nav__list__item">
            <a href="{{ url('/services') }}" class="nav__list__link">Services</a>
        </li>
        <li class="nav__list__item">
            <a href="{{ url('/request-a-quote') }}" class="nav__list__link">Request a Quote</a>
        </li>
        <li class="nav__list__item">
            <a href="" class="nav__list__link">Booking</a>
            <ul class="nav__list" id="nav__list">
                <li class="nav__list__item">
                    <a href="{{ url('/home-cleaning') }}" class="nav__list__link">Commercial</a>
                    <ul class="nav__list">
                        <li class="nav__list__item">
                            <a href="{{ url('/home-cleaning') }}" class="nav__list__link">Home Cleaning</a>
                        </li>
                        <li class="nav__list__item">
                            <a href="{{ url('/deep-clean') }}" class="nav__list__link">Deep Clean</a>
                        </li>
                        <li class="nav__list__item">
                            <a href="{{ url('/move') }}" class="nav__list__link">Move In/Move Out</a>
                        </li>
                    </ul>
                </li>
                <li class="nav__list__item">
                    <a href="{{ url('/home-cleaning') }}" class="nav__list__link">Residential</a>
                    <ul class="nav__list">      
                        <li class="nav__list__item">
                            <a href="{{ url('/post-renovation') }}" class="nav__list__link">Post Renovation</a>
                        </li>
                        <li class="nav__list__item">
                            <a href="{{ url('/airbnb-Short-term-rental') }}" class="nav__list__link">Airbnb Short Term Rental</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </li>
        <li class="nav__list__item">
            <a href="{{ url('/employment') }}" class="nav__list__link">Employment</a>
        </li>
    </ul>
</nav> --}}

<script>
    var hamburger = document.getElementById('hamburger');
    var navList = document.getElementById('nav__list');
    hamburger.addEventListener('click',toggleMenu);
    function toggleMenu(){
        navList.classList.toggle("displayBlock");
    }
</script>