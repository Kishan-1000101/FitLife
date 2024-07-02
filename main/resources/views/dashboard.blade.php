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

                    <!-- User Statistics -->
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="stat-card bg-primary text-white text-center p-3 rounded">
                                <h5>Workouts Completed</h5>
                                <p class="stat-number">{{ $userStats['workouts_completed'] }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card bg-success text-white text-center p-3 rounded">
                                <h5>Diet Plans Followed</h5>
                                <p class="stat-number">{{ $userStats['diet_plans_followed'] }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card bg-warning text-white text-center p-3 rounded">
                                <h5>Goals Achieved</h5>
                                <p class="stat-number">{{ $userStats['goals_achieved'] }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Placeholder for Progress Charts -->
                    <div class="mt-5">
                        <h5>Progress Charts (Coming Soon)</h5>
                        <div class="progress-chart bg-light p-5 rounded text-center">
                            <!-- Placeholder content -->
                            <p>Charts will be displayed here.</p>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('profile') }}" class="btn btn-primary">Update Profile</a>
                        <a href="{{ route('workouts.index') }}" class="btn btn-secondary">View Workouts</a>
                        <a href="{{ route('diets.index') }}" class="btn btn-success">View Diets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
