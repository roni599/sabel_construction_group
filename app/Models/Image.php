<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image_name', 'project_id','division_name'
    ];

    /**
     * Get the project that owns the image.
     */




    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }
}
