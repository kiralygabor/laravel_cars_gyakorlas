@extends('layout')


	<main>
        	@yield('content')
    </main>

	
@section('content')
<h1>Új Karosszéria</h1>
<div>
    @include('error')
    <form action="{{route('bodies.store')}}" method="post">
        @csrf
        <fieldset>
            <label for="name">Megnevezés</label>
            <input type="text" id="name" name="name">
        </fieldset>
        <button type="submit">Ment</button>
        <a href="{{ route('bodies.index') }}">Mégse</a>
    </form>
</div>
@endsection