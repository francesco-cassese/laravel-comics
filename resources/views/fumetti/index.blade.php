@extends('layouts.app')

@php 

    $comics = config('comics')

@endphp

@foreach ($comics as $comic)
        <div class="card">

        </div>
@endforeach
