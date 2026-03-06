<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

/*************  ✨ Windsurf Command ⭐  *************/
    /**
     * Get the books written by this author.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
/*******  647da365-a9f4-470b-b859-690d3069a147  *******/    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function book()
    {
        return $this->hasMany(Book::class);
    }
}