<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Comment_blog extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'comment_blog';
    protected $primaryKey = 'id';
     public $timestamps = true;
    // protected $guarded = ['id'];
     protected $fillable = ['id','id_blog','id_reader','content'];
    const CREATED_AT = "created_at";
    const UPDATED_AT = "updated_at";
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function Blog_news(){
        return $this->belongsTo("App\Model\Blog_news",'id_blog','id');
    }

    public function Reader(){
        return $this->belongsTo("App\Model\Reader",'id_reader','id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
