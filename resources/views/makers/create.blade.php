@extends('layout')


	<main>
        	@yield('content')
    </main>

	
@section('content')
<h1>Új Gyártó</h1>
<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
	<!-- ide íratjuk ki a validációs hibákat -->
    @include('error')
    <form action="{{route('makers.store')}}" method="post">
        @csrf
        <fieldset>
            <label for="name">Megnevezés</label>
            <input type="text" id="name" name="name">

            <label for="name">Logo</label>
            <input type="file" id="logo" name="logo">
        </fieldset>
        <button type="submit">Ment</button>
        <a href="{{ route('makers.index') }}">Mégse</a>
    </form>
</div>
@endsection