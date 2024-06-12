<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'website',
        'slug'
    ];

    public function scopeNotHavingProjects($query)
    {
        return $query->whereDoesntHave('projects');
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function getProjectsCountAttribute()
    {
        return $this->projects()->count();
    }

    public function getProjectsInProgressCountAttribute()
    {
        return $this->projects()->where('status', 'En cours')->count();
    }

    public function getProjectsDoneCountAttribute()
    {
        return $this->projects()->where('status', 'Terminé')->count();
    }
}
