@extends('layout.main-layout')

@section('list')
    <h1>Santi</h1>
    <ul>

        @foreach ($santos as $santo)
        <li>
            <a href="/santo/{{$santo ->id}}">
            
                {{$santo -> name}} {{$santo -> last_name}}
                <br>
                Num Miracle: {{ $santo -> num_miracle}}
                
            </a>
        </li>
        @endforeach
    </ul>
@endsection