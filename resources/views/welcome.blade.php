@php
    //  $name = "Hello"
@endphp

@extends('layout')

@vite(['/resources/css/app.css'])

@section('title', 'Home Page')

@section('styles')
    <style>
        h1 {
            font-size: 100px;
        }

        body {
            background-image: url("{{ asset('images/mountains.jpg') }}");
        }
    </style>
@endsection


@section('mainContent')
    <h1>Home Page</h1>
    @foreach ($data as $student)
        <p>{{ $student['name'] }}</p>
        <p>{{ $student['age'] }}</p>
    @endforeach
    <h1>{{ $sample['name'] }}</h1>
    {{-- <p>{{$age}}</p> --}}
@endsection
