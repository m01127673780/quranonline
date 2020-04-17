<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Halfhour extends Model{
 

	protected $table    = 'halfhour';
	protected $fillable = [
	      'head_ar',
            'head_en',
            'dateshow_ar',
            'dateshow_en',
            'content_ar',
            'content_en',
            'number',
            'descount3_ar',
            'descount3_en',
            'percentage3',
            'descount6_ar',
            'descount6_en',
            'percentage6',
            'descount12_ar',
            'descount12_en',
            'percentage12',
            'icon',
	];
}