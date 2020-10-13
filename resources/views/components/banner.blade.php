<div class="{{$modifier ?? ''}}">
    <h1 class="banner__title">
        {{$title ?? ''}}
    </h1>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="breadcrumb-link">Home</a></li>
        <?php $segments = ''; ?>
        @foreach(Request::segments() as $segment)
            <?php $segments .= '/'.$segment; ?>
            <li class="breadcrumb-item">
                <div class="breadcrumb-seperator">/</div>
                <a href="{{ $segments }}" class="breadcrumb-link">{{$segment}}</a>
            </li>
        @endforeach
    </ul>
</div>