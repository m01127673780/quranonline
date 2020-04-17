<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model{
 

      protected $table    = 'footer';
      protected $fillable = [

                  'payment_ar',
                  'payment_en',
                  'contact_ar',
                  'contact_en',
                  'callus_ar',
                  'callus_en',
                  'emaill',
                  'import_info_ar',
                  'import_info_en',
                  'aboutus_ar',
                  'aboutus_en',
                  'facebook',
                  'twitter',
                  'instagram',
                  'googel',
                  'youtube',
                  'link_appstore',
                  'link_googelplay',
                  'img_appstore',
                  'img_googelplay',

      ];

}
