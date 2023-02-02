@extends('layout.main-layout')

@section('title')
    <h1>Santi</h1>
    <ul>

        @foreach ($santos as $santo)
        <li>
            {{$santo -> name}} {{$santo -> last_name}}
            <br>
            Place of birth: {{$santo-> place_of_birth}}
            <br>
            Date of blessing: {{$santo -> date_of_blessing}}
            <br>
            Num Miracle: {{ $santo -> num_miracle}}
        </li>
        @endforeach
    </ul>
@endsection