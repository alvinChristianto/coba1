@extends('../layouts.master')

@section('title', '')
@section('content')
<h1 class="text-uppercase">input data sekolah</h1>
<form action="/datasekolah" method="post">
	<div class="form-group row">
		<label class="col-sm-2 col-form-label text-left" >nama sekolah</label>
		<div class="col-sm-10">
			<input  class="form-control" type="text" name="namasekolah" required="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label text-left">grade</label>
		
		<div class="col-sm-10">
			<select class="form-control" id="" name="grade">
				<option>SD</option>
				<option>SMP</option>
				<option>SMA</option>
			</select>
		</div>
	</div>
	<input type="submit" name="submit" value="Submit">
	{{ csrf_field() }}
</form>
@stop
