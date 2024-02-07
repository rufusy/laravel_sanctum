<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Task
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task query()
 * @mixin \Eloquent
 */
class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'description', 'priority'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
