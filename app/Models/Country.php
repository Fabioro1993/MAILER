<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'countries';

    protected $fillable = [
        'name_country',
        'iso_code',
        'created_at',
        'updated_at'
    ];

    // Relacion hacia abajo Country->States->Municipalitie
    public function state()
    {
        return $this->hasMany(State::class, 'country_id', 'id');
    }
}
