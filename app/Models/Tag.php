<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'type'
    ];

    const TYPES = [
        'nature' => 'Nature',
        'status' => 'Status',
    ];

    public function scopeNature($query)
    {
        return $query->where('type', 'nature');
    }

    public function scopeStatus($query)
    {
        return $query->where('type', 'status');
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

    public function getTypeLabel()
    {
        return self::TYPES[$this->type];
    }
}
