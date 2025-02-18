@extends('layout')
<div>
</div>
@section('content')
    <div>
        @include('error')
        <form action="{{ route('fuels.update', $fuel->id) }}" method="post">
            @csrf
            @method('PATCH')
            <fieldset>
                <label for="name">Megnevezés</label>
                <input type="text" id="name" name="name" required value="{{ old('name', $fuel->name) }}">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('fuels.index') }}">Mégse</a>
        </form>
    </div>
@endsection