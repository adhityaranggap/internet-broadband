<?php

namespace App\Helpers;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;

class Helper
{
    
   public static function toRp($value)
   {
       return 'Rp '.number_format($value, 0, ',', '.');
   }

}