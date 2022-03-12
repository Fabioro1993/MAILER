<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'states';

    protected $fillable = [
        'name_state',
        'country_id',
    ];

    public function country()
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

    public function municipality()
    {
        return $this->hasMany(Municipality::class, 'state_id', 'id');
    }
}