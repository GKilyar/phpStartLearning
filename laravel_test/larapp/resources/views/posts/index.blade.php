@extends('layouts.main');

@section('content')
    <h3>Posts</h3>
    @if(count($posts)>1)
        @foreach($posts as $i)
            <div class="well">
                <h3>{{$i->title}}</h3>
                <small>Written on {{$i->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No posts</p>
    @endif
@endsection
