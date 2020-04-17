<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model{
 

	protected $table    = 'videos';
	protected $fillable = [
	      'link',
            'img',
	];

}