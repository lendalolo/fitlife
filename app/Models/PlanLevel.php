<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanLevel extends Model
{
    use HasFactory;
    protected $table = 'plan_levels';

    protected $fillable = [
        'plans_id',
        'levels_id'
    ];
    public function goals()
    {
        return $this->belongsToMany(Goal::class, 'goal_plan_levels');
    }
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
