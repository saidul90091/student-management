@extends('layout')
@section('content')

<div class="card">
	<div class="card-header">
		<h2>Courses Application</h2>
	</div>
	<div class="card-body">
		<a href="{{ url('/courses/create') }}" class="btn btn-success btn-sm" title="Add New Student">
			<i class="fa fa-plus" aria-hidden="true"></i> Add New
		</a>
		<br />
		<br />
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Course Name</th>
						<th>Syllabus</th>
						<th>Duration</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($courses as $course )
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $course->name }}</td>
						<td>{{ $course->syllabus }}</td>
						<td>{{ $course->duration }}</td>

						<td>
							<a href="{{ url('/courses/' . $course->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
							<a href="{{ url('/courses/' . $course->id . '/edit')}}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

							<form method="POST" action="" accept-charset="UTF-8" style="display:inline">
								 <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button> 
							</form>
						</td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>

	</div>
</div>

@endsection