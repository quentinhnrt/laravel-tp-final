<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'function',
        'role',
        'slug',
    ];

    const DEVELOPER_ROLE = 'developer';
    const DEVELOPER_ROLE_LABEL = 'Developpeur';
    const PROJECT_MANAGER_ROLE = 'project_manager';
    const PROJECT_MANAGER_ROLE_LABEL = 'Chef de projet';

    public function scopeDevelopers($query)
    {
        return $query->where('role', self::DEVELOPER_ROLE);
    }

    public function scopeProjectManagers($query)
    {
        return $query->where('role', self::PROJECT_MANAGER_ROLE);
    }

    public function isDeveloper()
    {
        return $this->role === self::DEVELOPER_ROLE;
    }

    public function isProjectManager()
    {
        return $this->role === self::PROJECT_MANAGER_ROLE;
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

    public function getTasksByProject()
    {
        return $this->tasks->groupBy('project_id');
    }

    public function projects()
    {
        if ($this->isProjectManager()) {
            return $this->hasMany(Project::class, 'project_manager_id');
        }

        return false;
    }

    public function getProjectsTasks($projectId)
    {
        return $this->tasks->where('project_id', $projectId);
    }

    public function getRoles()
    {
        return [
            self::DEVELOPER_ROLE => self::DEVELOPER_ROLE_LABEL,
            self::PROJECT_MANAGER_ROLE => self::PROJECT_MANAGER_ROLE_LABEL,
        ];
    }
}
