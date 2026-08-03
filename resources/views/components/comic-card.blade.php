@props(['comic'])

<div class="card comic-card h-100">
    <div class="comic-thumb-wrapper">
        <img src="{{ $comic['thumb'] }}" class="card-img-top comic-thumb" alt="{{ $comic['title'] }}" loading="lazy">
        @if (!empty($comic['series']))
            <span class="comic-series-badge">{{ $comic['series'] }}</span>
        @endif
    </div>
    <div class="card-body d-flex flex-column">
        <h5 class="card-title comic-title">{{ $comic['title'] }}</h5>
        <div class="comic-card-footer mt-auto">
            <strong class="comic-price">{{ $comic['price'] }}</strong>
        </div>
    </div>
</div>
