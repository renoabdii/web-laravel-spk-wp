@extends('layouts.auth')

@section('main-content')
<div class="container d-flex align-items-center min-vh-100">
    <div class="row justify-content-center w-100">  
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h1 class="h4 text-gray-900">{{ __('Reset Password') }}</h1>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ $email ?? old('email') }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="{{ __('Password') }}" required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" style="background-color: #3700b3; border-color: #3700b3;">
                            {{ __('Reset Password') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
