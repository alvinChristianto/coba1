@extends('../layouts.master')

@section('title', '')
@section('content')

<h1 class="text-uppercase">edit sekolah</h1>
<form action="/datasekolah/{{$sekolah->id}}" method="post">
	<div class="form-group row">
		<label class="col-sm-2 col-form-label text-left" >nama sekolah</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="namasekolah" value="{{$sekolah->namasekolah}}">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label text-left">grade</label>
		<script type='text/javascript'>
    //When your page has loaded
    $(function(){
          //Set the value of your TypeId <select> list to the element with value '33'
          $('#TypeGrade').val('{{ $sekolah->grade }}');
      });
  </script>
  <div class="col-sm-10">
  	<select class="form-control" id="TypeGrade" name="grade" value="{{$sekolah->grade}}">
  		<option value="SD">SD</option>
  		<option value="SMP">SMP</option>
  		<option value="SMA">SMA</option>
  	</select>
  </div>
</div>



<input type="submit" name="submit" value="edit">
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
</form>

@stop


