<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'slug', 'description', 'image_path', 'user_id']; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //on cree la methode avec un type tableau et on return donc le slug on lui disant
    // que la source est le titre et a ce moment il nous crere un slug.
    public function sluggable(): array
    {
        return [
            'slug' =>[
                'source' => 'title'
            ]
        ];
    }
}
