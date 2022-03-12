<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, LogsActivity;

    protected $table = 'admins';

    protected $fillable = [
        'email',
        'password',
        'name',
        'phone',
        'id_card',
        'birthday',
    ];

    protected static $logAttributes = ['*'];

    protected static $logOnlyDirty = true;

    public function getTableAttribute()
    {
        $table = 'admins';
        return $table;
    }
}