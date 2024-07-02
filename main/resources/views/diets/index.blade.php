@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
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
@endsection
