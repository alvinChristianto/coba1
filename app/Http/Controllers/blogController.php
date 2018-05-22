<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\employee_table;
use App\hobby;
class blogController extends Controller
{
	public function index()
	{
    	// mass assigmnent
  //   	employee_table::create([
		// 'person_id'=>9,
		// 'employee_number'=>11119,
		// 'last_name'=>'Alvin Christianto',
		// 'sex'=>'M',
		// 'marital_status'=>'SINGLE',
		// 'hire_date'=>'1970-01-14'

  //   	]);

		
		$employee =employee_table::where('employee_number',11111)
		-> update(['sex' => 'F']);






		$employee = employee_table::all();

		return view('data',['empl'=>$employee]);

	}
	public function hobby()
	{

    	//INSERT mass assigmnent 
		// hobby::create([
		// 	'hobby'=>'panjat pinang',
		// 	'employee_number'=>11119,
		// 	'created_at'=>'',
		// 	'updated_at'=>''
		// ]);
		// $hobby = new hobby;

		// $hobby->hobby = $request->'panjat pinang';
		// $hobby->employee_number = $request->'11121';
		// $hobby->created_at = $request->'';
		// $hobby->updated_at = $request->'';


		// $hobby->save();

  //   	
    	// UPDATE mass asigment
		// $hobbi = hobby::where('employee_number','11119')
  //   	-> update(['hobby'=>'stalking mantan']);

    	//DELETE mass asigmnnt
    	// hobby::where('employee_number', '11119')->delete();
		// $hobbye=hobby::all();

		$hobby = hobby::find(1);
		// dd($hobby);
		// $singlePost->url();
		return view('hobby',['hobb'=>$hobby]);
		// $hobby = hobby::all();
		// return view('hobby',['hobb'=>$hobby]);

	}


	public function showid($employee_number)
	{
    	// $blog = employee_table::where('employee_number',"2");
    	// return view('single', ['employee_table'=>$blog]);
		$nilai = 'ini adalah link nya'.$employee_number;

    	// dd($nilai2);
		return view('single', ['employee_table'=>$nilai]);

	}
    // public function showArray()
    // {
    // 	$nama = DB::table['employee']->get();
    // 	dd($nama);
    // 	// ['hilman', 'alvin', 'dio'];
    // 	// $nama = 'alvin';
    // 	return view('single', ['variableNama' =>$nama]);
    // }
	public function tabel()
	{
		return view('tabel');
	}

}
