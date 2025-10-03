<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'district', 'units', 'available', 'biombo', 'high_description', 'description', 'location_id', 'status_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

    /**
     * The attractions that belong to the building.
     */
    public function attractions()
    {
        return $this->belongsToMany(Attraction::class)->withPivot('distance');
    }

    /**
     * Get the plans for the building.
     */
    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    /**
     * Get the location that owns the building.
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    /**
     * Get the status that owns the building.
     */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
