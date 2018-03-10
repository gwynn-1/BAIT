<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use App\API\URLCreator;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class Blog_news extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'blog_news';
    protected $primaryKey = 'id';
     public $timestamps = true;
    // protected $guarded = ['id'];
     protected $fillable = ['id','title','main_image','content','description','author','breaking'];
    const CREATED_AT = "created_at";
    const UPDATED_AT = "updated_at";
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function getBreakingNews(){
        return self::select("id","title","main_image","url_blog")->where("breaking","1")->get();
    }

    public function getBlogNewsWithLimit($limit){
        return self::select("id","title","main_image","url_blog")->limit($limit)->get();
    }

    public function getBlogNewsPaginator($page){
        return self::select("id","title","main_image","description","url_blog")->paginate($page);
    }

    public function getBlogNewsBySearch($input,$page){
        return self::select("id","title","main_image","description","url_blog")
            ->where("title","like","%".$input."%")
            ->paginate($page);
    }

    public function getBlogNewsById($id,$url){
        return self::select("title","content","author","created_at")->where("id",$id)->where("url_blog",$url)->first();
    }

    public function getBreakingNewsWithLimit($limit,$id_avoid){
        return self::select("id","title","main_image","url_blog")->where("breaking","1")->where("id","<>",$id_avoid)->limit($limit)->get();
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function comment_blog(){
        return $this->hasMany("App\Models\Comment_blog","id_blog","id");
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

    public function setMainImageAttribute($value)
    {
        $attribute_name = "main_image";
        $disk = "public";
        $destination_path = "book_image";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = Image::make($value);
            // 1. Generate a filename.
            $readablename = URLCreator::htaccess_String("blog_news","url_blog",$this->attributes["title"],"update");
//            dd($readablename);
            $filename = $readablename.'-'.time().'.jpg';
            // 2. Store the image on disk.
            Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $filename;
        }
    }
}
