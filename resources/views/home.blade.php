@extends('layouts/app')


@section('content')
    <div class="py-4">
        <h1 class="text-center text-primary pb-5">Orario Partenza Treni:</h1>
    @foreach($train as $trainItems)
            <div class="my_ticket mb-5 rounded-3">
                <div class="py-1 px-2 fw-bold">{{ $trainItems['train_code'] }}</div>
                <div class="d-flex px-2 text-center">
                    <div class="d-flex my_hour gap-3">
                        <div>
                            <div class="fw-bold fs-3 text-primary">{{ $trainItems['departure_time'] }}</div>
                            <div>{{ $trainItems['departure_station'] }}</div>
                        </div>
                        <div class="w-50 d-flex flex-column justify-content-center"><hr></div>
                        <div>
                            <div class="fw-bold fs-3 text-primary">{{ $trainItems['arrival_time'] }}</div>
                            <div class="">{{ $trainItems['arrival_station'] }}</div>
                        </div>
                    </div>

                    <div class="d-flex flex-column justify-content-center my_date fs-4 fw-bold">
                        {{ $trainItems['departure_date'] }}
                    </div>
                    <div class="d-flex justify-content-center align-items-center flex-grow-1">
                        <button class="btn btn-primary">Acquista</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection