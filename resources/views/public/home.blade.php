@extends('layout.layout')

@section('content')

	<div class="row">
		<div class="col-lg-9">
			{!! $homesite->centertext !!}
		</div>
	</div>

	
@stop

@section('right-content')

	<div class="content-right">

		<img class="img-responsive content-right-image" src="{{ $homesite->imagepath }}">

		{!! $homesite->righttext !!}

	</div>

@stop