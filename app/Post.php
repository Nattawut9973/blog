<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable =['title','body', 'size','category_id'];


//   CATGORY_ID
   public function category(){
       return $this->belongsTo(Category::class);
   }
}
