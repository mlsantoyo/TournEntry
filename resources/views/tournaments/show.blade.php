@extends ('layouts.app')

@section('content')


    <div class="container">
        <p><a class="btn btn-default btn-md" href="/tournaments" role="button">Back to Schedule</a></p>
        <h3>{{$tournament->name}}</h3>
        <hr>
        <h4>Date: {{$tournament->date}}</h4>
        <h4>Tournament Director: {{$tournament->id_td}}</h4>
        <h4>Fee: $ {{$tournament->fee}}.00</h4>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">I Want To Pitch In This Tournament!</a></p>
        
    </div>

@endsection