<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'published_at'];

    protected $dates = ['created_at', 'updated_at', 'published_at'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function getPublishedAtAttribute($date)
    {
        return Carbon::parse($date);
    }

}
