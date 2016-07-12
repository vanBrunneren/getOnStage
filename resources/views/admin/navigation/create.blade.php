@extends('layout.admin_layout')

@section('content')
	
	<div class="container">	
		<h2>Link erstellen</h2>
		<form method="POST" action="">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
						@if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group{{ $errors->has('route') ? ' has-error' : '' }}">
						<label for="route">Route</label>
						<input type="text" class="form-control" id="route" name="route" placeholder="Route" value="{{ old('route') }}">
						@if ($errors->has('route'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
						<label for="title">Titel</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Titel" value="{{ old('title') }}">
						@if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="checkbox">
						<label>
							@if(old('line'))
								<input type="checkbox" name="line" checked> 
							@else 
								<input type="checkbox" name="line"> 
							@endif
							Linie
						</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="checkbox">
						<label>
							@if(old('hidden'))
								<input type="checkbox" name="hidden" checked> 
							@else 
								<input type="checkbox" name="hidden"> 
							@endif
							Verstecken
						</label>
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
