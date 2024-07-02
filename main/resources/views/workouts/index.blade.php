@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Workout Plans') }}</div>
                <div class="card-body">
                    <a href="{{ route('workouts.create') }}" class="btn btn-primary mb-3">Create Workout Plan</a>
                    @foreach($workouts as $workout)
                        <div class="workout">
                            <h3>{{ $workout->name }}</h3>
                            <p>{{ $workout->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
