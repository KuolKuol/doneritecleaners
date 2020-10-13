<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

<script>


//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

console.log('wffnwkfnwjfwnf')

</script>

<div class="footer">

    <div class="container">

        <div class="contact-info">

            <h1 class="contact-info__title">Contact Us</h1>
            
            <div class="contact-info__section contact-info__section--icon">
                <i class="fas fa-phone-square-alt icon"></i>                
                <p class="contact-info__text"><strong>Phone:</strong><a href="tel:4039930376" class="footer__info__link"> 403-993-0376</a></p>            
            </div>

            <div class="contact-info__section contact-info__section--icon">
                <i class="fas fa-envelope-square icon"></i>    
                <p class="contact-info__text"><strong>Email:</strong><a href="mailto:info@doneritecleaners.com" class="footer__info__link"> info@doneritecleaners.com</a></p>            
            </div>

            <div class="contact-info__section contact-info__section--text">
                <h2 class="contact-info__subheading">Corporate Office</h2>
                <p class="contact-info__text">Unit 135 2525 36 St. NE Calgary, Alberta Canada</p>            
                <p class="contact-info__text">Postal Code - T1Y 5T4</p>    
                <p class="contact-info__text">Proudly serving the Greater Calgary Area.</p>
            </div>
        </div>
    
        <div class="links">

            <h1 class="links__title">Usefule Links </h1>

            <ul class="links__section">

                <li class="links__list-item"> <a href="{{ url('/services/corporate-commercial-cleaning') }}">Commercial Cleaning</a></li>
                <li class="links__list-item"> <a href="{{ url('/services/office-cleaning') }}">Office Cleaning Services</a></li>
                <li class="links__list-item"> <a href="{{ url('/services/condominium-cleaning') }}">Condominium Cleaning</a></li>
                <li class="links__list-item"> <a href="{{ url('/services/building-maintenance') }}">Building Maintenance</a></li>
                <li class="links__list-item"> <a href="{{ url('/services/floor-cleaning') }}">Floor Cleaning Services</a></li>
                <li class="links__list-item"> <a href="{{ url('/services/construction-cleaning') }}">Construction Cleaning</a></li>
                <li class="links__list-item"> <a href="{{ url('/services/carpet-cleaning') }}">Carpet Cleaning</a></li>
                
            </ul>

        </div>
        
        {{-- Start: footer contact form --}}
        <form action="/footer-form.php" method="POST" class="contact-form--footer">
            <h1 class="contact-form__title">Contact Form</h1>
            <div class="contact-form__group">
                <div class="contact-form__inputs">
                    <input type="email" name="email" id="email" placeholder="Email*" class="contact-form__input contact-form__input--email">
                    <input type="text" name="name" id="name" placeholder="Text*" class="contact-form__input contact-form__input--name">
                </div>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message*" class="contact-form__textarea "></textarea>
                <button id="submit" type="submit" class="contact-form__button">Submit</button>
            </div>
        </form>
        {{-- End: footer contact form --}}

    </div>

</div>

@include('includes.copyright')