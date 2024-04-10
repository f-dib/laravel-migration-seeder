@extends('layouts/app')


@section('content')
    @foreach($train as $trainItems)
        <div>
            {{ $trainItems['departure_date'] }}
        </div>
    @endforeach
@endsection