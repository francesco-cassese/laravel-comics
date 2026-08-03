@extends('layouts.app')

@section('contenuto')
<div class="container my-5">
    
    <!-- Origin Story -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h1 class="display-5 fw-bold mb-3 text-uppercase" style="color: var(--color-navy)">Il <span style="color: var(--color-gold)">Progetto</span></h1>
            <p class="lead">Un esercizio di sviluppo web per consolidare le basi di Laravel, Blade e Bootstrap.</p>
            <p>Questo progetto non nasce da una sfrenata passione per i fumetti, ma da una precisa traccia di esercitazione (tipica dei percorsi come Boolean). L'obiettivo principale di questo "finto" e-commerce è quello di costruire un'interfaccia utente dinamica, gestire correttamente le rotte e i layout del back-end, applicando nella pratica i concetti architetturali di Laravel.</p>
        </div>
        <div class="col-md-6 text-center">
            <!-- Un'immagine legata alla programmazione -->
            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=600&q=80" alt="Codice al computer" class="img-fluid rounded shadow">
        </div>
    </div>

    <hr class="my-5">

    <!-- L'Autore -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card comic-card border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <h4 class="card-title fw-bold">Studente & Sviluppatore</h4>
                    <span class="badge bg-primary mb-3">Junior Web Developer</span>
                    <p class="card-text"><strong>Obiettivo:</strong> Tradurre una traccia assegnata in codice pulito e un'applicazione funzionante.</p>
                    <p class="card-text text-muted small"><strong>Sfida Attuale:</strong> Padroneggiare il framework Laravel, Blade e il bundle degli asset con Vite.</p>
                    <p class="mt-3">Tutto questo codice è la palestra che mi sta aiutando a diventare un web developer professionista riga dopo riga.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
