@extends('layouts.app')

@section('contenuto')
<div class="container my-5">

    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-8">
            <h1 class="display-5 fw-bold mb-3 text-uppercase" style="color: var(--color-navy)">Cont<span style="color: var(--color-gold)">atti</span></h1>
            <p class="lead">Hai domande sui nostri fumetti? Scrivici, ti risponderemo il prima possibile.</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card comic-card border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <h4 class="card-title fw-bold">Scrivici una email</h4>
                    <p class="card-text">Per informazioni su ordini, disponibilità o collaborazioni.</p>
                    <a href="mailto:info@comics.test" class="jumbotron-btn mt-2">info@comics.test</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
