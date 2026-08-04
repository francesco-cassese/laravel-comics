@extends('layouts.app')

@php

    // Prendo la lista dei fumetti dal file di configurazione
    $comics = config('comics')

@endphp

@section('contenuto')
<header class="fumetti-header">
    <div class="container">
        <h1 class="fumetti-header-title">Catalogo Fumetti</h1>
        <p class="fumetti-header-subtitle">{{ count($comics) }} albi disponibili nel nostro negozio</p>
    </div>
</header>

<div class="container py-5">
    <div class="row g-4">
        {{-- Scorro i fumetti e li mostro con il componente comic-card --}}
        @foreach ($comics as $comic)
            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                <x-comic-card :comic="$comic" />
            </div>
        @endforeach
    </div>
</div>
@endsection
