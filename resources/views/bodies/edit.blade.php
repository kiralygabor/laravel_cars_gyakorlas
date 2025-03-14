@extends('layout')
<div>
</div>
@section('content')
    <div>
        @include('error')
        <form action="{{ route('bodies.update', $body->id) }}" method="post">
            @csrf
            @method('PATCH')
            <fieldset>
                <label for="name">Megnevezés</label>
                <input type="text" id="name" name="name" required value="{{ old('name', $body->name) }}">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('bodies.index') }}">Mégse</a>
        </form>
    </div>
@endsection