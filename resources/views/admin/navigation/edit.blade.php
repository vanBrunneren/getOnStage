@extends('layout.admin_layout')

@section('content')
	
	<div class="container">	
		<h2>Link bearbeiten</h2>
		<form method="POST" action="">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $nav->name }}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="route">Route</label>
						<input type="text" class="form-control" id="route" name="route" placeholder="Route" value="{{ $nav->route }}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="title">Titel</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Titel" value="{{ $nav->title }}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="line" {{ $nav->line ? 'checked' : '' }}> Linie
						</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="hidden" {{ $nav->hidden ? 'checked' : '' }}> Verstecken
						</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<button type="submit" class="btn btn-primary">Speichern</button>
				</div>
			</div>
		</form>
	</div>

@stop
