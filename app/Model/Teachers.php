<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model{
 

	protected $table    = 'teachers';
	protected $fillable = [
	      'name_ar',
	      'name_en',
	      'head_ar',
          'head_en',
	      'link',
          'img',

	];

}