@extends('layout')

@section('content')
    <h1>"{{ $fuel->name }}" üzemanyag</h1>
    <div class="row">
        <div>{{ $fuel->id }}</div>
        <div>{{$fuel->name}}</div>
    </div>
@endsection 