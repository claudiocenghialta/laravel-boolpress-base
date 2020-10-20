@extends('layouts.app')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h2>Elenco Post</h2>
    @foreach ($posts as $post)
        <div>
            <p><strong>{{$post->title}}</strong></p>
            <p>{{$post->body}}</></p>
        </div>
    @endforeach
@endsection