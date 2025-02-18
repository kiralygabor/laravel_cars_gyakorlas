@extends('layout')

@section('content')
    <h1>"{{ $body->name }}" Karosszéria</h1>
    <div class="row">
        <div>{{ $body->id }}</div>
        <div>{{$body->name}}</div>
    </div>
@endsection 