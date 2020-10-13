<div class="hero">
    <div class="hero__container">
        <h1 class="hero__title">
            {{$title}}
        </h1>
        <p class="hero__text">
            {{$text}}
        </p>
        @if ( isset($link) & isset($button) )
            <a href="{{$link}}" class="hero__button">{{$button}}</a>
        @endif
    </div>
</div>