@extends('layouts.main')

@section('main-content')

    @include('partials.cards', [
        'title' => "Viaggi in Italia",
        'array' => $Italia
    ])

    @include('partials.cards', [
        'title' => "Viaggi in Spagna",
        'array' => $Spagna
    ])

    @include('partials.cards', [
        'title' => "Viaggi in Grecia",
        'array' => $Grecia
    ])

@endsection

@section('page-title', "Travel | Home")
