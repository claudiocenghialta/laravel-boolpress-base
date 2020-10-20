@extends('layouts.app')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h2>Elenco utenti</h2>
    @foreach ($users as $user)
        <ul>
            <li class="name"><strong>Name: </strong> {{$user->name}}</li>
            <li class="mail"><strong>Mail: </strong> {{$user->email}}</li>
            <li class="avatar"><strong>Avatar: </strong> {{$user->avatar->avatar}}</li>
            <li><a href=" {{route('users.show',$user->id)}} ">Dettagli</a></li>
        </ul>
    @endforeach
@endsection