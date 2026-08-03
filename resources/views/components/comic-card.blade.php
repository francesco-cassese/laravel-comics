@props(['comic'])

<div class="card">
    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
    <div class="card-body">
        <h5 class="card-title">{{ $comic['title'] }}</h5>
        <p class="card-text">{{ Str::limit($comic['description'], 150) }}</p>
        <p class="card-text"><strong class="comic-price">{{ $comic['price'] }}</strong></p>
    </div>
</div>
