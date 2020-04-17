<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model{
 

	protected $table    = 'stat';
	protected $fillable = [
	      'number',
	      'font_awesome',
 	      'head_ar',
          'head_en',
          'img',

	];
 
}