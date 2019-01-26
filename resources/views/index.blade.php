@extends('layout.home')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<br>
			<p style="color: green;">
				<?php

					$Success = Session::get('Success');

					if ($Success) {
						echo $Success;
						Session::put('Success', null);
					}

				?>
			</p>
			
			<form action="" method="POST" class="form-inline">
				<p>Work Name:- </p>
				<p>
					<input type="text" class="form-control" name="workName">
					<span><input type="submit" class="btn btn-success" value="Save"></span>
				</p>

				@csrf
				
			</form>
			<table class="table">
				<tr>
					<th>List</th>
					<th>Status</th>
					<th>Action</th>
				</tr>

				@foreach($data as $row)
				<tr>
					<td>{{ $row->work }}</td>
					<td>{{ $row->status }}</td>
					<td>
						<a href="{{ route('getEditRoute', $row->id) }}" class="btn btn-primary">Edit</a> <a href="{{ route('getDeleteRoute', $row->id) }}" onclick="return confirm('Do you really want to Delete?');" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</table>
			
		</div>
	</div>
</div>
@endsection