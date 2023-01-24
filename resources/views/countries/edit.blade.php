@extends('layouts.base')

@section('content')
    <form action="{{ route('countries.update', ['country' => $country]) }}" method="post">
        @csrf
        @method('put')
        <label for="country">Inserisci Paese:</label>
        <input type="text" name="country" id="country" value="{{ $country->name }}">

        <label for="continent">Inserisci Continente:</label>
        <input type="text" name="continent" id="continent" value="{{ $country->continent }}">

        <label for="region">Inserisci Regione:</label>
        <input type="text" name="region" id="region" value="{{ $country->region }}">

        <label for="surface_area">Inserisci Superficie:</label>
        <input type="number" name="surface_area" id="surface_area" value="{{ $country->surface_area }}">

        <label for="population">Inserisci Popolazione:</label>
        <input type="number" name="population" id="population" value="{{ $country->population }}">

        <label for="life_expectancy">Inserisci Speranza di vita:</label>
        <input type="number" name="life_expectancy" id="life_expectancy" value="{{ $country->life_expectancy }}">

        <label for="local_name">Inserisci Nome:</label>
        <input type="text" name="local_name" id="local_name" value="{{ $country->local_name }}">

        <label for="government_form">Inserisci Forma di governo:</label>
        <input type="text" name="government_form" id="government_form" value="{{ $country->government_form }}">

        <button type="submit">Invia</button>
    </form>
@endsection
