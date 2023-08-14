@extends('layout')

@section('title', 'About Page')


@section('styles')
    <style>
        body {
            background-image: url("{{ asset('images/sea.jpg') }}");
            height: 100vh;
        }
    </style>
@endsection

@section('mainContent')
    <h1>About Page</h1>
@endsection
