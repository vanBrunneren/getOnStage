@extends('layout.admin_layout')

@section('content')

	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Descritpion</th>
					<th>Feedback</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($references as $ref)
					<tr>
						<td>{{ $ref->id }}</td>
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