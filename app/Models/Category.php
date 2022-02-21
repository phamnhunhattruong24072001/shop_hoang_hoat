<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $table = 'category';

    public $fillable = ['category_name', 'category_slug', 'category_image', 'category_parent_id'];

    // protected $dates = ['deleted_at'];

    public $timestamps = false;

    public $primaryKey = 'id';

    public function parent(){
        return $this->hasMany(Category::class, 'category_parent_id');
    }
}