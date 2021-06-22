<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'content', 'featured', 'slug', 'category_id'];

    protected $dates = ['deleted_at'];

    public function getFeaturedAttribute($featured){

        return asset($featured);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //    public function hasTag($tagId)
    // {

    //     return in_array($tagId, $this->tags->pluck('id')->toArray());

    // }
}
