@extends('layout.main-layout')

@section('list')
    <h1>Santi</h1>
    {{-- link per il form di aggiunta --}}
    <a href="{{ route('santo.create')}}">add santo</a>
    <ul>

        @foreach ($santos as $santo)
        <li>
            <a href="{{ route('santo.show', ['id' => $santo -> id]) }}">
            
                {{$santo -> name}} {{$santo -> last_name}}
                <br>
                Num Miracle: {{ $santo -> num_miracle}}
                
            </a>
            {{-- cancellazione elemento --}}
            <a href="{{ route('santo.destroy', ['id' => $santo -> id]) }}">X</a>
        </li>
        @endforeach
    </ul>
@endsection