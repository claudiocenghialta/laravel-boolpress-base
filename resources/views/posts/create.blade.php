@extends('layouts.app')
@section('content')
    <form action="{{route('posts.store')}}" method="post">
    @csrf
    <input name="_method" type="hidden" value="POST">
    @method('POST')
    <select name="user_id">
        @foreach ($users as $user)
        <option value=" {{$user->id}} ">{{$user->id}}</option>
        
        @endforeach
    </select>
    <label for="title">Titolo</label>
    <input type="text" name="title" placeholder="Titolo">
    <label for="body">Testo post</label>
    <textarea name="body" id="" cols="30" rows="10" placeholder="Testo post"></textarea>
    <input type="submit" value="Invia">
    </form>

@endsection