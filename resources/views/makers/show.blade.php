@extends('layout')

@section('content')
    <h1>"{{ $maker->name }}" gyártó</h1>
    <div class="row">
        <div>{{ $maker->id }}</div>
        <div>{{$maker->name}}</div>
        <img src="{{ asset('logos/' . $maker->logo) }}" alt="{{ $maker->name }} logo" style="max-width: 1000px;">
    </div>
@endsection