@extends('layouts.app')
@section('pagetitle', trans('app.501_error'))
@section('content')
    <div id="content">
        <h1>fünf null eins</h1>
        <br>
        <h2>Herzlichen Glückwunsch!</h2>
        <br>
        <h3>Du hast eine Seite gefunden, dessen Features noch nicht implementiert wurden.</h3>
        <h3>Sei stolz, aber versuche es noch mal <a href="{{ url('/') }}">hiermit</a>.</h3>
    </div>
@endsection