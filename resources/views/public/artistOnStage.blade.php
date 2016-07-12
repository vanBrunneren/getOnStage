@extends('layout.layout')

@section('content')

	<div class="row">
		<div class="col-lg-11">
			{!! $artistOnStage->centertext !!}
		</div>
	</div>

	
@stop

@section('right-content')

	<div class="content-right">

		<img class="img-responsive content-right-image" src="{{ $artistOnStage->imagepath }}">

		{!! $artistOnStage->righttext !!}

	</div>

@stop