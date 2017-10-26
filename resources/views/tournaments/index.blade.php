@extends ('layouts.app')

@section('content')

    <h1>Tournaments</h1>
    @if(count($tournaments) > 0)
        @foreach($tournaments as $tournament)
            <div class = "well">
                <h3><a href="/tournaments/{{$tournament->id}}">{{$tournament->date}} {{$tournament->name}}</a></h3>
                
            </div>
        @endforeach
       {{$tournaments->links()}}
    @else
        <p>No tournaments found</p>

    @endif

@endsection