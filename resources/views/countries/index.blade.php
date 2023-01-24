@extends('layouts.base')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>
        <ul>
        @foreach($countries as $country)
        <a href="{{ route('countries.show', ['country' => $country]) }}">
            <li>{{ $country->name }}</li>
        </a>
        @endforeach
        </ul>
    </div>
@endsection
