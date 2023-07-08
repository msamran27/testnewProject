<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable=[
        'name',
        'slug',
    ];
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::saving(function ($category) {
            $category->slug = static::generateUniqueSlug($category->name);
        });
    }

    /**
     * Generate a unique slug based on the given name.
     *
     * @param string $name
     * @return string
     */
    protected static function generateUniqueSlug($name)
    {
        $slug = Str::slug($name, '-');
        $originalSlug = $slug;
        $count = 2;

        while (static::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }
}
