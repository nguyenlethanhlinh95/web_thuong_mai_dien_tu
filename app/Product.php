<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable=['pro_name','pro_code','pro_price','image','pro_info','spl_price','category_id','stock'];

    // 1 danh muc co nhieu quan pham
    public function categories() {
        return $this->belongsToMany('Category', 'categories');
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

}
