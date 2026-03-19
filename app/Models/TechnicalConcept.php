<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TechnicalConcept extends Model
{
    //
    protected $fillable = [
        'heading',
        'content',
    ];

    /**
     * Get the content associated with the TechnicalConcept
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function content(): HasOne
    {
        return $this->hasOne(Content::class);
    }
}
