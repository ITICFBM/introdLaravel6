<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
/* Modelos a ocupar  */
use App\Category;
use App\Images;

class Article extends Model
{
    use SoftDeletes;
    /* declaramos nuestros campos de nuestra tabla tags*/    
    protected $fillable = [
        'title',
        'img',
        'subtitle',
        'body',
        'description',
        'keywords',
        'category_id'

        
    ];

/* definindo la relacion de article and category one a one */
    public  function category()
    {
        return $this->hasOne(Category::class, 'category_id');


    }

/* definimos la relacion de imagenes  one a one  */

    public function Image(){
        return $this->hasMany('App\Images', 'foreign_key', 'img_id');
    }

   /**
    * Get the user that owns the Article
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function user(): BelongsTo
   {
       return $this->belongsTo(User::class);
   }
   public function getGetImageAttribute()
   {
       if($this->img)
           return url("storage/$this->img");
   }
}
