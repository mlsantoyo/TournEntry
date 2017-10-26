@extends('layouts.app')

@section('content')

    <div class="bg">
        <div class="welcome">   
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img src="../images/pitcher.jpg">
                </div>
                <div class="col-md-4 col-sm-4">
                    <h1>{{$title}}</h1>
                    <p>Welcome! This is where you can register for the tournament!</p>
                    <p><a class="btn btn-primary btn-lg" href="/login" role="button"> Log In </a> <br>  <a class="btn btn-primary btn-lg" href="/signIn" role="button">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>




@endsection  
