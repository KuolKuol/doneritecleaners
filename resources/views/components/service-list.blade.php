<div class="service-list">
    <div class="service__container">
        @foreach ($services as $service)
            @component('components.service')
                @slot('image') {{ $service["image"] }}  @endslot
                @slot('title') {{ $service["title"] }} @endslot
                @slot('summary') {{ $service["summary"] }} @endslot
                @slot('link') {{ $service["link"] }} @endslot
                @slot('linkTitle') {{ $service["linkTitle"] }} @endslot
            @endcomponent
        @endforeach 
    </div>
</div>