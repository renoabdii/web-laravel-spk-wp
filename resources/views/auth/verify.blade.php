@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card my-5">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h1 class="h4 text-gray-900">{{ __('Verify Your Email Address') }}</h1>
                    </div>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                    <p>{{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
