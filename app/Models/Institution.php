<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Institution extends Model
{
    //
    protected $fillable = [
        'user_id',

        'name',
        'street',
        'housenumber',
        'postcode',
        'city',
        'email',

    ];

    /**
     * Get the contactPerson associated with the Institution
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contactUser(): HasOne
    {
        return $this->hasOne(User::class, 'user_id');
    }

    /**
     * Get all of the users for the Institution
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
