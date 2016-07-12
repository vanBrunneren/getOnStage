@extends('layout.admin_layout')

@section('content')
	
	<div class="container">
		<h2>Navigation</h2>
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group">
					<form action="/admin/navigation/create">
						<button type="submit" class="btn btn-primary">Link erstellen</button>
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<table class="table">
					<thead>
						<tr>
							<th>
								Reihenfolge
							</th>
							<th>
								Name
							</th>
							<th>
								Route
							</th>
							<th>
								Titel
							</th>
							<th>
								
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach($navigation as $nav)
							<tr>
								<td>
									@if($order_low->order !== $nav->order)
										<a class="menu-link" href="/admin/navigation/orderUp/{{ $nav->id }}">
											<i class="fa fa-arrow-up"></i>
										</a>
									@endif
									@if($order_high->order !== $nav->order)
										<a class="menu-link" href="/admin/navigation/orderDown/{{ $nav->id }}">
											<i class="fa fa-arrow-down"></i>
										</a>
									@endif
								</td>
								<td>
									<a href="/admin/navigation/edit/{{ $nav->id }}">{{ $nav->name }}</a>
								</td>
								<td>
									<a href="/admin/navigation/edit/{{ $nav->id }}">{{ $nav->route }}</a>
								</td>
								<td>
									<a href="/admin/navigation/edit/{{ $nav->id }}">{{ $nav->title }}</a>
								</td>
								<td class="text-right">
									<a class="menu-link" href="/admin/navigation/edit/{{ $nav->id }}">
										<i class="fa fa-pencil"></i>
									</a>
									<a class="menu-link" href="/admin/navigation/delete/{{ $nav->id }}">
										<i class="fa fa-times"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@stop