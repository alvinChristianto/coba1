<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\master_barang;
use App\sekolah;
use App\masterbrg;
class tablecontrol extends Controller
{
	public function index2()
	{	
		// $sekolah = sekolah	::all();
		// return view ('datasekolah/muka',['sekolah'=>$sekolah]);
		return view ('/barang/view1');
	}
	public function tambah()
	{	
		
		return view ('/barang/tambahbarang');
	}

	public function createmaster(Request $request)
	{
		//INSERT mass assigmnent 
		masterbrg::create([
			'idKategori'=>$request->kategori,
			'namaBarang'=>$request->namaBrg,
			'jenis'=>$request->jenisBrg,
			'created_at'=>'',
			'updated_at'=>''
		]);
		// alert('data berhasil disimpan');
		return redirect('/');
	}

	public function index()
	{	
		// $sekolah = sekolah	::all();
		// return view ('datasekolah/muka',['sekolah'=>$sekolah]);
		return view ('/register');
	}
	public function check()
	{
		return view ('datasekolah/check');
	}
	public function show($id)
	{ 
		
		if(!$id) abort(404);
		$sekolah = sekolah::find($id);
		return view ('datasekolah/tampilDataSatuan',['sekolah'=>$sekolah]);
	}
	public function create()
	{
		return view('datasekolah/create');
	}
	public function store_create(Request $request)
	{
		//INSERT mass assigmnent 
		sekolah::create([
			'namasekolah'=>$request->namasekolah,
			'grade'=>$request->grade,
			'created_at'=>'',
			'updated_at'=>''
		]);
		return redirect('/datasekolah');
	}

	public function edit($id)
	{	
		
		// $barang = master_barang::where('id_barang', 'like', '$id')->get();
		// $barang = master_barang::where('id','$id');
		// $barang = master_barang::where('id_kategori','=',$id)->get();
		// dd($barang);
		$sekolah = sekolah::find($id);
		// dd($barang);
		return view('datasekolah/edit', ['sekolah'=>$sekolah]);
	}
	public function update(Request $request, $id)
	{
		// $barang = master_barang::where('id_kategori','=',$id)->get()->first();
		$sekolah = sekolah::find($id);

		$sekolah->namasekolah  = $request->namasekolah;
		$sekolah->grade = $request->grade;
		$sekolah->save();
		$sekolah = sekolah::all();
		return redirect ('/datasekolah');	

	}
	public function destroy($id)
	{
		$sekolah = sekolah::find($id);
		$sekolah->delete();
		return redirect ('datasekolah');
	}
	// public function tabel()
	// {
	// 	$user=tableuser::
	// 	return view('tabel',['user'=>$user]);
	// }
	
	// public function masterbarang()
	// {
	// 	$barang=master_barang::all();
	// 	return view('tabelbarang',['barang'=>$barang]);
	// }
	public function masterbarang()
	{
		$barang=master_barang::all();
		return view('tabelbarang',['barang'=>$barang]);
	}
	// public function index()
	// {
	// 	return view('masterbarang/blog');
	// 	// return $id;
	// 	// if(!$barang) abort(404);
	// 	// return view ('edit',['barang'=>$barang]);
	// }
	
}
