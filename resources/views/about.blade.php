@extends('layout')
@section('title','About us')
@section('content')

<h1>about us</h1>
<p>company bio here</p>
    <form action="/about" method="POST">
    <input type="text" name="name">
    <input type="password" name="name">
    <button type="submit">submit</button>
    {{ csrf_field() }}
    </form>

@endsection

