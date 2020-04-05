@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mx-auto">
                <h2 class="text-center mb-5">Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} w-50 mx-auto mt-3" name="email" value="{{ old('email') }}" placeholder="Your Email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif                        
                    
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} w-50 mx-auto mt-3 mb-3" name="password" placeholder="Your Password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4 mx-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <button type="submit" class="btn btn-primary float-right">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                    <input type="hidden" name="status">
                </form>
            </div>
        </div>
    </div>
@endsection
