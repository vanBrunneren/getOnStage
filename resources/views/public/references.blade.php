@extends('layout.layout')

@section('content')
    
    <div class="content">
  		<div class="row">
	    	@foreach($references as $ref)
	    		<a class="reference-card-link" href="http://google.ch">
		    		<div class="col-lg-12">
		    			<div class="reference-card">
			    			<h1 class="reference-card-title">{{ $ref->title }}</h1>
			        		<p><strong>Beschreibung:</strong> {{ $ref->description }}</p>
			        		<p><strong>Feedback:</strong> {{ $ref->feedback}}</p>
		        		</div>
		        	</div>
		        </a>
	        @endforeach
		</div>
    </div>

@stop