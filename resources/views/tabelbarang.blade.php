<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <title>Hello, world!</title>
</head>
<body>
 <div class="m-4">
  <div class="table-responsive">
    <h1 class=" text-center text-uppercase font-weight-bold">tabel user</h1>
    <table class="table table-striped table-sm">
      <thead>
        <tr class=" text-left text-uppercase bg-info m-2">
          <th class=" p-2">id barang</th>
          <th class=" p-2">id kategori</th>
          <th class=" p-2">nama barang</th>
          <th class=" p-2">jumlah stok</th>
          <th class=" p-2">harga (rp)</th>
        </tr>
      </thead>

      
      <tbody> 
        @foreach($barang as $tablebarang)
        <tr>
          <td>{{$tablebarang -> id_barang}}</td>
          <td>{{$tablebarang -> id_kategori}}</td>
          <td>{{$tablebarang -> nama_barang}}</td>
          <td>{{$tablebarang -> jumlah_stok}}</td>
          <td>{{$tablebarang -> hargaperbarang}}</td>
          <td><a href="edit">edit</a></td>
        </tr>
        @endforeach
        <tr>
          <td><a href="edit">edit</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>