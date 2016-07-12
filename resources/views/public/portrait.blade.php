@extends('layout.layout')

@section('content')
	
	<div class="row portrait-row">
		<div class="col-lg-4 col-md-6">
			<img class="img-responsive content-right-image" src="{{ $portrait->imagepath }}">
		</div>
		<div class="col-lg-6 col-md-6">
			{!! $portrait->titletext !!}
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			{!! $portrait->maintext !!}
		</div>
	</div>

	
@stop