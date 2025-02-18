@extends('layout')

@section('content')
<h1>Karosszériák</h1>
<div>
	@include('success')
    <button class="add-button"><a href="{{ route('bodies.create') }}" title="Új">Új hozzáadása</a></button>
	@foreach($bodies as $body)
		<div class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
			<div class="col id">{{ $body->id }}</div>
			<div class="col">{{$body->name}}</div>
			<div class="right">
					<div class="col"><a href="{{ route('bodies.show', $body->id) }}"><button class = "showBtn"><i class="fa fa-edit edit" title="Mutat"></i>Mutat</button></a></div>
					<div class="col"><a href="{{ route('bodies.edit', $body->id) }}"><button><i class="fa fa-edit edit" title="Módosít"></i>Módosítás</button></a></div>
					<div class="col">
						<form action="{{ route('bodies.destroy', $body->id) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" name="btn-del-body"><i class="fa fa-trash-can trash" title="Töröl"></i>Törlés</button>
						</form>
					</div>
			</div>
		</div>
	@endforeach
</div>
@endsection