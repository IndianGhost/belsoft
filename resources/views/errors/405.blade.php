@extends('layouts.frontend')

@section('title')
    NOT ALLOWED HTTP REQUEST
@endsection

@section('container')
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">

                    <h2 class="brand-before">
                        <small>Not Allowed HTTP Request !</small>
                    </h2>
                    <h1 class="brand-name">ERROR 405</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>You are not allowed to forward <strong>this request</strong> !
                        </small>
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection