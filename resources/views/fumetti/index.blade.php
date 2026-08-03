@extends('layouts.app')

@php 

    $comics = config('comics')

@endphp

@section('contenuto')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-md-4 mb-4">
                <x-comic-card :comic="$comic" />
            </div>
        @endforeach
    </div>
</div>
@endsection
