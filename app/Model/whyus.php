<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Whyus extends Model{
 

	protected $table    = 'whyus';
	protected $fillable = [
	      'head_ar',
            'head_en',
            'text_ar',
            'text_en',
            'color_diffe_ar',
            'color_diffe_en',
            'icon',
	];

}