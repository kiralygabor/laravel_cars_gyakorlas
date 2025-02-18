@extends('layout')

@section('content')
<h1>Gyártók</h1>
<div>
	@include('success')
    <button class="add-button"><a href="{{ route('makers.create') }}" title="Új">Új hozzáadása</a></button>
	@foreach($makers as $maker)
		<div class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
			<div class="col id">{{ $maker->id }}</div>
			<div class="col">{{$maker->name}}</div>
			<img src="{{ asset('logos/' . $maker->logo) }}" alt="{{ $maker->name }} logo" style="max-width: 1000px;">
			<div class="right">
					<div class="col"><a href="{{ route('makers.show', $maker->id) }}"><button class = "showBtn"><i class="fa fa-edit edit" title="Mutat"></i>Mutat</button></a></div>
					<div class="col"><a href="{{ route('makers.edit', $maker->id) }}"><button><i class="fa fa-edit edit" title="Módosít"></i>Módosítás</button></a></div>
					<div class="col">
						<form action="{{ route('makers.destroy', $maker->id) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" name="btn-del-maker"><i class="fa fa-trash-can trash" title="Töröl"></i>Törlés</button>
						</form>
					</div>
			</div>
		</div>
	@endforeach
</div>
@endsection