@extends('layouts.main')

@section('content')
    <p>{{$title}}</p>
    @if(count($name)>0)
        <ul class="list-group">
            @foreach($name as $i)
                <li class="list-group-item">{{$i}}</li>
            @endforeach
        </ul>    
    @endif
@endsection