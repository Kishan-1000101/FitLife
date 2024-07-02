@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Upgrade Membership') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('membership.upgrade') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="membership" class="col-md-4 col-form-label text-md-right">{{ __('Select Membership') }}</label>

                            <div class="col-md-6">
                                <select id="membership" class="form-control @error('membership') is-invalid @enderror" name="membership" required>
                                    <option value="gold">Gold</option>
                                    <option value="platinum">Platinum</option>
                                </select>

                                @error('membership')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Upgrade') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
