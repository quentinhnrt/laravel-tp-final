<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'project_id',
    ];

    public function isAssignedTo(int $employeeId): bool
    {
        return $this->employees->contains($employeeId);
    }

    public function employees(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Employee::class);
    }

    public function developers(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->employees()->where('role', Employee::DEVELOPER_ROLE);
    }

    public function projectManagers(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->employees()->where('role', Employee::PROJECT_MANAGER_ROLE);
    }

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function  natureTags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->tags()->nature();
    }

    public function statusTag(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->tags()->status();
    }

    public function hasTag(int $tagId): bool
    {
        return $this->tags->contains($tagId);
    }

    public function getStatus(): ?Tag
    {
        return $this->statusTag()->first();
    }
}
