@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-capitalize">tambah barang</div>

                <div class="card-body">
                    <form method="POST" action="/tambah">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right text-capitalize">kategori</label>
                            <div class="col-md-6">
                                <input type="text" name="kategori" class="form-control" required>
                            </div>  

                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right text-capitalize">nama barang</label>
                            <div class="col-md-6">
                                <input type="text" name="namaBrg" class="form-control" required>
                            </div>

                        </div>
                         <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right text-capitalize">jenis</label>
                            <div class="col-md-6">
                                <input type="text" name="jenisBrg" class="form-control" required>
                            </div>

                        </div>

                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary text-capitalize">
                                   tambah data
                                </button>
                                {{ csrf_field() }}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
