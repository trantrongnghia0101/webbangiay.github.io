<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','price','category_id','img', 'created_at', 'updated_at'];

    public function products ($query, $limit){
        return $query->orderBy('id','desc')->limit($limit)->with(['category']);
    }
    public function category (){
        return $this->belongsTo(categories::class);
    }

    public static function getLatestProducts($limit = 6)
    {
        return self::orderBy('created_at', 'desc')->take($limit)->get();
    }
    public static function getProducts()
    {
        return self::orderBy('id', 'desc')->get();
    }
    public static function getsellProducts($limit = 3)
    {
        return self::orderBy('sold', 'desc')->take($limit)->get();
    }
}
