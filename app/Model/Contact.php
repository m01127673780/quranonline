<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model{
 

	protected $table    = 'contact';
	protected $fillable = [
        'name',         
       'email',         
       'subject',         
       'phone',         
       'message',         
       'icon',
	];

}