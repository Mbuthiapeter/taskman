<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'category', 
                        'priority', 'assigned_to', 'group',
                         'due_date', 'scope'];

    protected $dates = ['due_date'];                     

     /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getShortContentAttribute()
    {
       return substr($this->name, 0, random_int(25, 40));
    }
}
