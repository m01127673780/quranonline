<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model{
 

	protected $table    = 'news';
	protected $fillable = [
	      'name',
          'password',
          'icon',

	];

}