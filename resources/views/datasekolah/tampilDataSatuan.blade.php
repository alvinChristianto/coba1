@extends('../layouts.master')

@section('title', '')
@section('content')

<h1 class="text-uppercase">Sekolah : {{$sekolah->namasekolah}} ({{$sekolah->grade}})</h1>
<div class="col-4">
	<form  class='form-inline' action="/datasekolah/{{$sekolah-> id}}/edit" method="post">
		<input class="btn btn-secondary" type="submit" name="submit" value="edit">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="get">
	</form>
</div>
<div class="col-4">
	<form   class='form-inline' action="/datasekolah/{{$sekolah-> id}}" method="post">
		<input  class="btn btn-secondary" type="submit" name="submit" value="delete">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="DELETE">
	</form>
</div>
<a href="/datasekolah">kembali</a>

@stop
