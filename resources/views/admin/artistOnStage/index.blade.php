@extends('layout.admin_layout')

@section('content')
	
	<div class="container">
		<form method="POST" action="/admin/artistOnStage/index" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="centertext">Text mitte</label>
						<textarea name="centertext" id="centertext" class="form-control ck-textarea" rows="8">{{ $artistOnStage->centertext }}</textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="image">Bild rechts</label>
						<img class="img-responsive admin-image" src="/{{ $artistOnStage->imagepath }}">
						<input name="input_image" id="fileupload" type="file" accept="image/*" class="fileupload" data-preview-file-type="text">
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="righttext">Text rechts</label>
						<textarea name="righttext" id="righttext" class="form-control ck-textarea" rows="8">{{ $artistOnStage->righttext }}</textarea>
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