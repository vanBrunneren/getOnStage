@extends('layout.layout')

@section('content')
    
    <div class="row">
    	<div class="col-sm-12">
    		<div class="contact-title">
    			<h4 class="contact-headline">Haben Sie eine Frage an <strong class="text-gold">GetOnStage?</strong></h4>
    			Dann füllen Sie bitte dieses Formular aus und Ihre Anfrage wird dierekt weitergeleitet.
    		</div>
	        <form class="form-horizontal" method="POST" action="">
	        	@if (count($errors) > 0)
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
	        	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				<div class="form-group">
					<label for="name" class="col-sm-3 control-label">Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-3 control-label">E-Mail Adresse</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="email" name="email" placeholder="E-Mail Adresse">
					</div>
				</div>
				<div class="form-group">
					<label for="subject" class="col-sm-3 control-label">Betreff</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Betreff">
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="col-sm-3 control-label">Anfrage</label>
					<div class="col-sm-9">
						<textarea id="message" class="form-control" name="message" rows="3"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						<button type="submit" class="btn btn-primary">Absenden</button>
					</div>
				</div>
			</form>
		</div>
    </div>

@stop