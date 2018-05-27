@extends('layouts.frontend')

@section('title')
    BELSOFT -Failed-
@endsection

@section('container')
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Thank you very much for
                        <strong>Contacting Us</strong> !
                    </h2>
                    <hr>
                    <p>but your message was <strong>not sent</strong> successfully, for these reasons :</p>
                    <ul>
                        @foreach($error as $key => $item)
                        <li>{{$key}} : {{$item}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
@endsection