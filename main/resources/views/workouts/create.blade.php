@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Workout Plan') }}</div>
                <div class="card-body">
                    <form action="{{ route('workouts.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Workout Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="fitness_goal">Fitness Goal</label>
                            <select name="fitness_goal" class="form-control" required>
                                <option value="weight_loss">Weight Loss</option>
                                <option value="muscle_gain">Muscle Gain</option>
                                <option value="maintain">Maintain</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Plan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
