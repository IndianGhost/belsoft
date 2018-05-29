@extends('layouts.auth')

@section('title')
    Admin -LOGIN-
@endsection

@section('container')
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email address</label>
                        <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Enter email" autofocus required/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password</label>
                        <input class="form-control" id="password" type="password" name="password" placeholder="Password" required/>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                Remember me
                            </label>
                        </div>
                    </div>
                    <input class="btn btn-primary btn-block" type="submit" value="Login"/>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="{{ route('register') }}">Register an Account</a>
                    <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
@endsection