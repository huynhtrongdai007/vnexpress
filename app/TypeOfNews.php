<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class TypeOfNews extends Model
{
    protected $guarded = [];
    
    public function categorys()
    {
        return $this->belongsTo(Category::class,'id_cat','id');
    }
}
