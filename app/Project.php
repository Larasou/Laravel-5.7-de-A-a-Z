<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'published_at'];

    protected static function boot()
    {
        parent::boot();

        self::deleting(function ($model) {
            $model->tasks->each->delete();
        });
    }

    protected $dates = ['created_at', 'updated_at', 'published_at'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function getPublishedAtAttribute($date)
    {
        return Carbon::parse($date);
    }

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
