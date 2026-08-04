{{-- Il componente riceve un fumetto e lo chiamo "comic" --}}
@props(['comic'])

<div class="card comic-card h-100" tabindex="0">
    <div class="comic-thumb-wrapper">
        <img src="{{ $comic['thumb'] }}" class="card-img-top comic-thumb" alt="{{ $comic['title'] }}" loading="lazy">
        {{-- Mostro il badge della serie solo se c'è --}}
        @if (!empty($comic['series']))
            <span class="comic-series-badge">{{ $comic['series'] }}</span>
        @endif
        {{-- Mostro un'anteprima della trama, se c'è, accorciata a 140 caratteri --}}
        @if (!empty($comic['description']))
            <div class="comic-card-overlay">
                <p class="comic-card-synopsis">{{ \Illuminate\Support\Str::limit($comic['description'], 140) }}</p>
            </div>
        @endif
    </div>
    <div class="card-body d-flex flex-column">
        <h5 class="card-title comic-title">{{ $comic['title'] }}</h5>
        <div class="comic-card-footer mt-auto">
            <strong class="comic-price">{{ $comic['price'] }}</strong>
        </div>
    </div>
</div>
