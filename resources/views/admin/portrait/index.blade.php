@extends('layout.admin_layout')

@section('content')
	
	<div class="container">
		<form method="POST" action="/admin/portrait/index" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="image">Portrait Bild</label>
						<img class="img-responsive admin-image" src="{{ $portrait->imagepath }}">
						<input name="input_image" id="fileupload" type="file" accept="image/*" class="fileupload" data-preview-file-type="text">
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="titletext">Titel Text</label>
						<textarea name="titletext" id="titletext" class="form-control ck-textarea" rows="8">{{ $portrait->titletext }}</textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="maintext">Content Text</label>
						<textarea name="maintext" id="maintext" class="form-control ck-textarea" rows="8">{{ $portrait->maintext }}</textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Speichern</button>
					</div>
				</div>
			</div>
		</form>
	</div>

@stop