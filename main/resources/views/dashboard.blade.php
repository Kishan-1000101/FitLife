@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert" id="statusMessage">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Welcome, {{ Auth::user()->name }}!</h4>
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
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Workout Plans') }}</div>
                <div class="card-body">
                    @foreach($workouts as $workout)
                        <div class="workout">
                            <h3>{{ $workout->name }}</h3>
                            <p>{{ $workout->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">{{ __('Diet Plans') }}</div>
                <div class="card-body">
                    @foreach($diets as $diet)
                    <div class="diet">
                        <h3>{{ $diet->name }}</h3>
                        <p>{{ $diet->description }}</p>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            const statusMessage = document.getElementById('statusMessage');
            if (statusMessage) {
                statusMessage.style.display = 'none';
            }
        }, 2000); // Hide after 2 seconds
    });
</script>
@endsection
