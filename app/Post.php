<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table= 'posts';

    protected $fillable = ['author', 'title', 'description', 'content', 'category_id'];

    protected $dates= ['deleted_at'];

    
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
