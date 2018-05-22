
@extends('../layouts.master')

@section('title', '')
@section('content')
<h1 class="text-uppercase">daftar sekolah</h1>

<div class="row">
 <div class="col-md-8 offset-md-2 ">
   <div class="table-responsive">
    <table class="table table-striped table-sm" >
     <thead class="thead-dark text-uppercase">
      <tr>
        <th>No</th>
        <th>Nama sekolahan</th>
        <th>Grade</th>
      
      </th>
    </thead>
    <tbody >
      <?php $angka = 1?>
      @foreach($sekolah as $tablesekolah)
      <tr >
        <td class="align-middle">
          <?php echo $angka ;
          $angka++;?>
        </td>
        <td class="text-uppercase align-middle "><a style="text-decoration: none" href="/datasekolah/{{$tablesekolah-> id}}">{{$tablesekolah -> namasekolah}}</a></td>
        <td class="align-middle">{{$tablesekolah -> grade}}</td>

        <!-- <td class="align-middle">
         <form action="/datasekolah/{{$tablesekolah-> id}}/edit" method="post">
          <input class="btn btn-secondary" type="submit" name="submit" value="view detail">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="get">
        </form>
      </td> -->

    </tr>
    @endforeach
  </tbody>
</table>

      <!--   <div class="col-xs-6">
         <form  class='form-inline' action="/datasekolah/{{$tablesekolah-> id}}/edit" method="post">
          <input class="btn btn-secondary" type="submit" name="submit" value="edit">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="get">
        </form>
      </div>
      <div class="col-xs-6">
        <form   class='form-inline' action="/datasekolah/{{$tablesekolah-> id}}" method="post">
          <input  class="btn btn-secondary" type="submit" name="submit" value="delete">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="DELETE">
        </form>
      </div> -->
    </div>
    <form action="/datasekolah/create" method="post">
      <input class="btn btn-primary" type="submit" name="submit" value="tambah data sekolah">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="get">
    </form>
  </div>  
</div>
</div>
@stop

