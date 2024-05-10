<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $primaryKey = 'project_id'; 
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_name', 'description', 'location', 'employee', 'type', 'doc', 'value', 'status','dist'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'doc' => 'date', // Ensure 'doc' is cast to a date
        'value' => 'float', // Ensure 'value' is cast to a float
    ];

    public function images()
    {
        return $this->hasMany(Image::class,'project_id', 'project_id');
    }
}
