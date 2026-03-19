<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Exercise extends Model
{
    //
    protected $fillable = [
        'heading',
        'content',
    ];

    /**
     * Get the content associated with the Exercise
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function content(): HasOne
    {
        return $this->hasOne(Content::class);
    }
}
