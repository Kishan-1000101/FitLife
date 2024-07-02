@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <h4>Welcome, {{ $user->name }}!</h4>
                    <p>Here’s an overview of your progress:</p>
                    <!-- Add progress tracking elements here -->
                    <a href="{{ route('profile') }}" class="btn btn-primary">Update Profile</a>
                    <a href="{{ route('workouts') }}" class="btn btn-secondary">View Workouts</a>
                    <a href="{{ route('diets') }}" class="btn btn-success">View Diets</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
