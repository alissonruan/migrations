<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    /**
     * Get the buildings for the location.
     */
    public function buildings()
    {
        return $this->hasMany(Building::class);
    }
}
