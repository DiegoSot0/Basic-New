<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;

    protected $fillable = [
        'title', 'body', 'iframe','image','user_id'
    ];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }
    public function user()
    {
        return $this->belongsto(User::class);
    }
    public function getGetExcerptAttribute($key)
    {
        return substr($this->body, 0, 140);
    }
    public function getGetImageAttribute($key)
    {
        if($this->image)
        return url("storage/$this->image");
    }
}
