@extends('layouts.base')

@section('content')
    <form action="{{ route('countries.store') }}" method="post">
        @csrf
        <label for="country">Inserisci Paese:</label>
        <input type="text" name="country" id="country">

        <label for="continent">Inserisci Continente:</label>
        <input type="text" name="continent" id="continent">

        <label for="region">Inserisci Regione:</label>
        <input type="text" name="region" id="region">

        <label for="surface_area">Inserisci Superficie:</label>
        <input type="number" name="surface_area" id="surface_area">

        <label for="population">Inserisci Popolazione:</label>
        <input type="number" name="population" id="population">

        <label for="life_expectancy">Inserisci Speranza di vita:</label>
        <input type="number" name="life_expectancy" id="life_expectancy">

        <label for="local_name">Inserisci Nome:</label>
        <input type="text" name="local_name" id="local_name">

        <label for="government_form">Inserisci Forma di governo:</label>
        <input type="text" name="government_form" id="government_form">

        <button type="submit">Invia</button>
    </form>
@endsection
