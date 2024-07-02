@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" name="age" class="form-control" value="{{ Auth::user()->age }}">
                        </div>
                        <div class="form-group">
                            <label for="weight">Weight (kg)</label>
                            <input type="number" name="weight" class="form-control" value="{{ Auth::user()->weight }}">
                        </div>
                        <div class="form-group">
                            <label for="height">Height (cm)</label>
                            <input type="number" name="height" class="form-control" value="{{ Auth::user()->height }}">
                        </div>
                        <div class="form-group">
                            <label for="fitness_goal">Fitness Goal</label>
                            <select name="fitness_goal" class="form-control">
                                <option value="weight_loss" {{ Auth::user()->fitness_goal == 'weight_loss' ? 'selected' : '' }}>Weight Loss</option>
                                <option value="muscle_gain" {{ Auth::user()->fitness_goal == 'muscle_gain' ? 'selected' : '' }}>Muscle Gain</option>
                                <option value="maintain" {{ Auth::user()->fitness_goal == 'maintain' ? 'selected' : '' }}>Maintain</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
