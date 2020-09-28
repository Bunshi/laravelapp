<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restdata extends Model
{
   protected $table = 'restdata';
   protected $grarded = array('id');

   public static $rules = array(
       'message' => 'required',
       'url' => 'required',
   );
   
   public function getdata()
   {
       return $this->id . ':' . $this->mssage . '(' . $this->url . ')';
   }
}
