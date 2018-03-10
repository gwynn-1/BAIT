<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Book_type extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'book_type';
    protected $primaryKey = 'id';
    public $timestamps = true;
    const CREATED_AT = "created_at";
    const UPDATED_AT = "updated_at";
    // protected $guarded = ['id'];
     protected $fillable = ['id','name','type_url'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function getBookTypeByUrl($url){
        return self::select("name","id")->where("type_url",$url)->get();
    }

    public function getBookTypeById($id){
        return self::select("name")->where("id",$id)->first();
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function Book(){
        return $this->hasMany("App\Models\Book","id_type","id");
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
