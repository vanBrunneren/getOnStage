@extends('layout.admin_layout')

@section('content')

	<div class="container">
		<div class="new-button">
			<a href="create" role="button" class="btn btn-primary btn-large">Neue Referenz eintragen</a>
		</div>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Reihenfolge</th>
					<th>Title</th>
					<th>Descritpion</th>
					<th>Feedback</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($references as $ref)
					<tr>
						<td>
							@if($order_low->ordering !== $ref->ordering)
								<a class="menu-link" href="/admin/references/orderUp/{{ $ref->id }}">
									<i class="fa fa-arrow-up"></i>
								</a>
							@endif
							@if($order_high->ordering !== $ref->ordering)
								<a class="menu-link" href="/admin/references/orderDown/{{ $ref->id }}">
									<i class="fa fa-arrow-down"></i>
								</a>
							@endif
						</td>
						<td>{{ $ref->title }}</td>
						<td>{{ $ref->description }}</td>
						<td>{{ $ref->feedback }}</td>
						<td class="text-right">
							<a class="menu-link" href="/admin/references/edit/{{ $ref->id }}">
								<i class="fa fa-pencil"></i>
							</a>
							<a class="menu-link" href="/admin/references/delete/{{ $ref->id }}">
								<i class="fa fa-times"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@stop