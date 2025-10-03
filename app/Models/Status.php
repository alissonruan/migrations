<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';

    /**
     * Get the buildings for the status.
     */
    public function buildings()
    {
        return $this->hasMany(Building::class);
    }
}
