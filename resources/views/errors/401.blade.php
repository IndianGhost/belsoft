@extends('layouts.frontend')

@section('title')
    UNAUTHORIZED
@endsection

@section('container')
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">

                    <h2 class="brand-before">
                        <small>Unauthorized !</small>
                    </h2>
                    <h1 class="brand-name">ERROR 401</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>You are not authorized to <strong>access to this content</strong> !
                        </small>
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection