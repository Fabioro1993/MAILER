<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'municipalities';

    protected $fillable = [
        'name_municipality',
        'state_id',
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}