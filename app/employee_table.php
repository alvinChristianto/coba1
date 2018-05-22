<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee_table extends Model
{
    protected $table = 'employee';
    public $timestamps = false;

    protected $fillable =['person_id','employee_number','last_name', 'sex','hire_date'];
}
