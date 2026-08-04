@extends('layouts.app')

@php
    // Prendo i fumetti dal file di configurazione e tengo solo i primi 6
    $featuredComics = array_slice(config('comics'), 0, 6);
@endphp

@section('contenuto')
    @include('partials.jumbotron')

    <section class="container features-section">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="1" y="6" width="14" height="11"></rect>
                        <path d="M15 10h4l3 3v4h-7z"></path>
                        <circle cx="6" cy="19" r="2"></circle>
                        <circle cx="18" cy="19" r="2"></circle>
                    </svg>
                </div>
                <h3 class="feature-title">Spedizione rapida</h3>
                <p class="feature-text">Consegna in 24/48h su tutto il territorio nazionale, imballaggi a prova di collezionista.</p>
            </div>
            <div class="col-md-4">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2l8 3v6c0 5-3.5 8.5-8 11-4.5-2.5-8-6-8-11V5z"></path>
                        <path d="M9 12l2 2 4-4"></path>
                    </svg>
                </div>
                <h3 class="feature-title">Autenticità garantita</h3>
                <p class="feature-text">Solo edizioni originali e certificate, dalle prime uscite alle rarità da collezione.</p>
            </div>
            <div class="col-md-4">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 11a9 9 0 0 1 18 0"></path>
                        <path d="M21 12v6a2 2 0 0 1-2 2h-1"></path>
                        <rect x="1" y="11" width="6" height="8" rx="1.5"></rect>
                        <rect x="17" y="11" width="6" height="8" rx="1.5"></rect>
                    </svg>
                </div>
                <h3 class="feature-title">Assistenza dedicata</h3>
                <p class="feature-text">Un team di appassionati pronto a consigliarti l'albo giusto per la tua collezione.</p>
            </div>
        </div>
    </section>

    <section class="container featured-section">
        <div class="d-flex justify-content-between align-items-end flex-wrap gap-2 mb-4">
            <div>
                <h2 class="section-title mb-1">In evidenza</h2>
                <p class="section-subtitle mb-0">Le uscite più amate dai nostri collezionisti</p>
            </div>
            <a href="{{ route('fumetti') }}" class="section-link">Vedi tutto il catalogo &rarr;</a>
        </div>
        <div class="row g-4">
            {{-- Scorro i fumetti in evidenza e li mostro con il componente comic-card --}}
            @foreach ($featuredComics as $comic)
                <div class="col-6 col-md-4 col-lg-2">
                    <x-comic-card :comic="$comic" />
                </div>
            @endforeach
        </div>
    </section>

    <section class="cta-banner">
        <div class="container text-center">
            <h2 class="cta-title">Pronto per la prossima avventura?</h2>
            <p class="cta-text">Scopri l'intero catalogo e trova il fumetto perfetto per la tua collezione.</p>
            <a href="{{ route('fumetti') }}" class="jumbotron-btn">Esplora il catalogo</a>
        </div>
    </section>
@endsection