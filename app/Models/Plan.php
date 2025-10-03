<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'area', 'height', 'width', 'floor', 'building_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Get the building that owns the plan.
     */
    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    /**
     * Get the rooms for the plan.
     */
    public function rooms()
    {
        return $this->belongsToMany(Room::class);
    }
}
