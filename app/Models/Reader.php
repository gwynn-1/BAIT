<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Reader extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'readers';
    protected $primaryKey = 'id';
     public $timestamps = true;
    // protected $guarded = ['id'];
     protected $fillable = ['id','mssv','name','school','email','sdt','facebook','password'];
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

    public function Borrow_detail(){
        return $this->hasMany("App\Models\Borrow_detail","id_reader","id");
    }

    public function Comment_blog(){
        return $this->hasMany("App\Models\Comment_blog","id_reader","id");
    }

    public function Comment_book(){
        return $this->hasMany("App\Models\Comment_book","id_reader","id");
    }

    public function Repcomment_blog(){
        return $this->hasMany("App\Models\Repcomment_blog","id_reader","id");
    }

    public function Repcomment_book(){
        return $this->hasMany("App\Models\Repcomment_book","id_reader","id");
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
