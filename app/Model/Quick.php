<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Quick extends Model{
 

	protected $table    = 'quick';
	protected $fillable = [
        'name',         
       'email',         
       'subject',         
       'phone',         
       'message',         
       'icon',
	];

}