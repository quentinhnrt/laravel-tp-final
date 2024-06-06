<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'client_id',
        'project_manager_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function projectManager()
    {
        return $this->belongsTo(Employee::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
