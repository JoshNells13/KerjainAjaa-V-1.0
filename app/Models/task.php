<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class task extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'description', 'status', 'due_date', 'completed_at', 'category_id'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Category()
    {
        return $this->belongsTo(categorie::class, 'category_id');
    }

    public function getStatusLabelAttribute()
    {
        return match ($this->status) {
            'in_progress' => 'In Progress',
            'pending' => 'Pending',
            'completed' => 'Completed',
            default => $this->status,
        };
    }
}
