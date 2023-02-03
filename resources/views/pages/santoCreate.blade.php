@extends('layout.main-layout')

@section('form')
<div >
    <h1>CREATE SANTO</h1>

    <form action="{{ route('santo.add') }}" method="post">
        @csrf

        <label for="name">name</label>
        <input type="text" name="name">

        <br>

        <label for="last_name">last name</label>
        <input type="text" name="last_name">

        <br>

        <label for="place_of_birth">place of birth</label>
        <input type="text" name="place_of_birth">
        
        <br>

        <label for="date_of_blessing">date of blessing</label>
        <input type="date" name="date_of_blessing">
        
        <br>

        <label for="num_miracle">num miracle</label>
        <input type="number" name="num_miracle">
        
        <br>

        <input type="submit" value="CREATE SANTO">

    </form>
</div>
@endsection