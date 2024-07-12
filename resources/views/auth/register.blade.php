@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card my-5">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h1 class="h4 text-gray-900">{{ __('Register') }}</h1>
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

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="{{ __('Password') }}" required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" style="background-color: #3700b3; border-color: #3700b3;">
                            {{ __('Register') }}
                        </button>
                    </form>

                    <div class="text-center mt-3">
                        <a class="small" href="{{ route('login') }}">
                            {{ __('Already have an account? Login!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
