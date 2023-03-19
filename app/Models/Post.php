<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'body',
        'active',
        'published_at',
        'userId',
    ];

    public function user():BelongsTo{
        return $this->BelongsTo(User::class);
    }

    public function categories():BelongsToMany{
        return $this->BelongsToMany(Category::class);
    }
}
