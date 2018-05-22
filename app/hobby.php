<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hobby extends Model
{
    protected $table = 'hobby';
    // public $timestamps = false;
	protected $guarded =['created_at','updated_at'];
    public $newAttribute = 'new attribute';

    public function url()
    {
        return 'http:://www.domain.com/post/' . $this->id;
    }
}
