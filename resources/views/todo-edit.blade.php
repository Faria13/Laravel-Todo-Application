@extends('layout.home')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<br>
			<p class="alert-success">
				<?php

					$Success = Session::get('Success');

					if ($Success) {
						echo $Success;
						Session::put('Success', null);
					}

				?>
			</p>
			<h3>Edit Task</h3>
			<form method="POST" action="{{ route('postEditRoute',$data->id) }}" class="form-inline">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<p>
					<input type="text" name="workName" class="form-control" value="{{ $data->workName }}">
					<input type="text" name="status" class="form-control" value="{{ $data->status }}">
					<input type="submit" value="Update" class="btn btn-primary">
				</p>
			</form>
		</div>
	</div>
</div>
@endsection