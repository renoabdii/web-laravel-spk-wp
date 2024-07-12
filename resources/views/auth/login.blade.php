@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card my-5">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h1 class="h4 text-gray-900">{{ __('Login') }}</h1>
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

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="{{ __('Password') }}" required>
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" style="background-color: #3700b3; border-color: #3700b3;">
                            {{ __('Login') }}
                        </button>

                        {{-- @if (Route::has('password.request'))
                            <div class="text-center mt-3">
                                <a class="small" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            </div>
                        @endif --}}

                        @if (Route::has('register'))
                            <div class="text-center mt-2">
                                <a class="small" href="{{ route('register') }}">{{ __('Create an Account!') }}</a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
