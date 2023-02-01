@extends('layouts.base')

@section('content')
    </div>
        {{ $country->name }}
        <h2>Città</h2>
        <ul>
            @foreach ($cities as $city)
                <li>{{$city->name}}</li>
            @endforeach
        </ul>
        <h2>Lingue</h2>
        <ul>
            @foreach ($languages as $language)
                <li>{{$language->name}}</li>
            @endforeach
        </ul>
    </div>
@endsection
