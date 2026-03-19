<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Publication extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    /**
     * Get all of the books for the Publication
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

    /**
     * Get all of the chapter for the Publication
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chapter(): HasMany
    {
        return $this->hasMany(Chapter::class);
    }

    /**
     * Get all of the contents for the Publication
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contents(): HasMany
    {
        return $this->hasMany(Content::class);
    }
}
