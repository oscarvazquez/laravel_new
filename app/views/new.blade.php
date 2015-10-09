@extends('app')

@section('content')

<h1>About Me </h1>


<div class = "row">
	@if (count($gents) > 0)
		@foreach ($gents as $person)
			<li>{{ $person }}</li>
		@endforeach
	@endif

	<button class = "button expand">This is a button</button>
</div>

@stop