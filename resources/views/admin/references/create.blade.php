@extends('layout.admin_layout')

@section('content')

	<div class="container">
		<h2>Referenz erstellen</h2>
		<form method="POST" action="" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="title">Titel</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Titel" value="">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="description">Beschreibung</label>
						<input type="text" class="form-control" id="description" name="description" placeholder="Beschreibung" value="">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="feedback">Feedback</label>
						<input type="text" class="form-control" id="feedback" name="feedback" placeholder="Feedback" value="">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="image">Datei</label>
						<input name="reference-file" id="reference-file" type="file" accept="*" class="fileupload" data-preview-file-type="text">
					</div>
				</div>
			</div>	

			<div class="row">
				<div class="col-xs-12">
					<button type="submit" class="btn btn-primary">Erstellen</button>
				</div>
			</div>
		</form>
	</div>

@stop