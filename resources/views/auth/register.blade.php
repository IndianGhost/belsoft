@extends('layouts.auth')

@section('title')
    Admin -REGISTER-
@endsection

@section('container')
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Register an Account</div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="form-row">
                            <label for="name">Name</label>
                            <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Enter name" autofocus required disabled/>

                            @if($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? 'has-error': '' }}">
                        <label for="email">Email address</label>
                        <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Enter email" required disabled/>

                        @if($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="password">Password</label>
                                <input class="form-control" id="password" name="password" type="password" placeholder="Password" required disabled/>
                            </div>
                            <div class="col-md-6">
                                <label for="password-confirmation">Confirm password</label>
                                <input class="form-control" id="password-confirmation" type="password" name="password_confirmation" placeholder="Confirm password" required disabled/>
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-primary btn-block" type="submit" value="Register" disabled/>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="{{ route('login') }}">Login Page</a>
                    <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
@endsection