<?php

namespace App\Models;

use Dom\Text;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Content extends Model
{
    //
    protected $fillable = [
        'user_id',
        'chapter_id',
        'text_id',
        'exercise_id',
        'technical_concept_id',
        'publication_id',

        'order_number',
    ];

    /**
     * Get the user that owns the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the chapter that owns the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function chapter(): BelongsTo
    {
        return $this->belongsTo(Chapter::class);
    }

    /**
     * Get the text that owns the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function words(): BelongsTo
    {
        return $this->belongsTo(Words::class);
    }

    /**
     * Get the exercise that owns the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exercise(): BelongsTo
    {
        return $this->belongsTo(Exercise::class);
    }

    /**
     * Get the technical_concept that owns the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function technical_concept(): BelongsTo
    {
        return $this->belongsTo(TechnicalConcept::class);
    }

    /**
     * Get the publication that owns the Content
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function publication(): BelongsTo
    {
        return $this->belongsTo(Publication::class);
    }

}
