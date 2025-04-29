<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $isbn
 * @property string $description
 * @property int $category_id
 * @property string $cover_image
 * @property \DateTime $published_at
 */
class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'isbn',
        'description',
        'category_id',
        'published_at',
        'cover_image'
    ];

    protected $casts = [
        'published_at' => 'date'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('status')
            ->withTimestamps();
    }

    public function scopeSearch($query, $searchTerm)
    {
        return $query->whereRaw(
            "MATCH(title, author, description) AGAINST(? IN NATURAL LANGUAGE MODE)", 
            [$searchTerm]
        );
    }
}
