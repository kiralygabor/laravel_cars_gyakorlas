@extends('layout')


	<main>
        	@yield('content')
    </main>

	
@section('content')
<h1>Új Model</h1>
<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
	<!-- ide íratjuk ki a validációs hibákat -->
    @include('error')
    <form action="{{route('models.store')}}" method="post">
        @csrf
        <fieldset>
            <label for="name">Megnevezés</label>
            <input type="text" id="name" name="name">
        </fieldset>
        <button type="submit">Ment</button>
        <a href="{{ route('models.index') }}">Mégse</a>
    </form>
</div>
@endsection