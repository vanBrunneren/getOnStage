@extends('layout.layout')

@section('content')
    
    <div class="content">
    	<div class="title">Referenzen</div>
    	@foreach($references as $ref) 
        	{{ $ref->title }}
        @endforeach
    </div>

@stop