@extends('layout.admin_layout')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<a href="{{ url('admin/home/index') }}">Home bearbeiten</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<a href="{{ url('admin/brunnerOnStage/index') }}">BrunnerOnStage bearbeiten</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<a href="{{ url('admin/artistOnStage/index') }}">ArtistOnStage bearbeiten</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<a href="{{ url('admin/portrait/index') }}">Portrait bearbeiten</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<a href="{{ url('admin/navigation/index') }}">Navigation bearbeiten</a>
			</div>
		</div>
	</div>

@stop
