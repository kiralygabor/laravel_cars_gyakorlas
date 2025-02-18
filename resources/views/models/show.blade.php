@extends('layout')

@section('content')
    <h1>"{{ $model->name }}" model</h1>
    <div class="row">
        <div>{{ $model->id }}</div>
        <div>{{$model->name}}</div>
    </div>
@endsection 