<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
	
	protected $table    = 'categories';
    protected $fillable = ['name', 'slug', 'description'];
    protected $dates    = ['deleted_at'];

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}

