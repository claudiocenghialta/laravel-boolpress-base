@extends('layouts.app')
@section('content')
    <h2>Dettaglio utente</h2>
    <ul>
        <li><strong>Name: </strong> {{$user->name}}</li>
        <li><strong>Mail: </strong> {{$user->email}}</li>
        <li><strong>Avatar: </strong> {{$user->avatar->avatar}}</li>
        <li><strong>Telefono: </strong> {{$user->avatar->telefono}}</li>
        <li><a href=" {{route('users.show',$user->id)}} ">Dettagli</a></li>
    </ul>
    <form action=" {{route('users.destroy',$user->id)}} " method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Cancella Utente">
    </form>
    <h2>I suoi post</h2>
    @foreach ($user->posts as $post)
        <div>
            <p> <strong> {{$post->title}}</strong> </p>
            <p> {{$post->body}} </p>

        </div>
        
    @endforeach
@endsection