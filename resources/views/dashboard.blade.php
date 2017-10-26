@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Welcome,!</h1>

                    <a href="/tournaments" class="btn btn-success">Go to Tournament Schedule</a>
                    <h3>You have entered these tournaments:</h3>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
