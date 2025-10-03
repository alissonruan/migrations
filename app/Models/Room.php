<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comodos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'svg_id', 'building_id_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

    /**
     * Get the building that owns the room.
     */
    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    /**
     * Get the plans that owns the room.
     */
    public function plans()
    {
        return $this->belongsToMany(Plan::class);
    }
}
