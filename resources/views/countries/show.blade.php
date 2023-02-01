@extends('layouts.base')

@section('content')
    </div>
        {{ $country->name }}
        <ul>
            @foreach ($cities as $city)
                <li>{{$city->name}}</li>
            @endforeach
        </ul>
    </div>
@endsection
