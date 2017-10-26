@extends('layouts.app')

@section('content')
    {{--  <h1>{{$title}}</h1>  --}}
    
    {{--  @if(count($tournaments) > 0)  --}}
        
    <ul class="list-group">
        
        @foreach($tournaments as $tournament)
        
        <li class="list-group-item">{{$tournament->name}}</li>
        @endforeach
    </ul>
    
    {{--  @endif  --}}



@endsection
