<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Words extends Model
{
    //
    protected $fillable = [
        'text',
    ];

    /**
     * Get the content associated with the Words
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function content(): HasOne
    {
        return $this->hasOne(Content::class);
    }
}
