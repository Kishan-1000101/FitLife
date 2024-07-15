@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Workout Plans') }}</div>

                <div class="card-body">
                    @foreach($workouts as $workout)
                        <div class="workout">
                            <h3>{{ $workout->name }}</h3>
                            <p>{{ $workout->description }}</p>
                            <ul>
                                @foreach($workout->exercises as $exercise)
                                    <li>{{ $exercise->name }} - {{ $exercise->category }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
