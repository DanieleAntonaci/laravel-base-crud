@extends('layout.main-layout')

@section('santo')
    <h1>
        Santo: {{$santo -> name}} {{$santo -> last_name}}
    </h1>
    <h2>
        Place of birth: {{$santo-> place_of_birth}}
    </h2>
    <div>
        Date of blessing: {{$santo -> date_of_blessing}}
    </div>
    <div>
        Num Miracle: {{ $santo -> num_miracle}}
    </div>
@endsection