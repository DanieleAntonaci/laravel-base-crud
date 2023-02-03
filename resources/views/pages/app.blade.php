@extends('layout.main-layout')

@section('list')
    <h1>Santi</h1>
    <ul>

        @foreach ($santos as $santo)
        <li>
            <a href="{{ route('santo.show', ['id' => $santo -> id]) }}">
            
                {{$santo -> name}} {{$santo -> last_name}}
                <br>
                Num Miracle: {{ $santo -> num_miracle}}
                
            </a>
            <a href="{{ route('santo.delete', ['id' => $santo -> id]) }}">X</a>
        </li>
        @endforeach
    </ul>
@endsection