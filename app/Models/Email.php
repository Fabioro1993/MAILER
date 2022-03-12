<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory, SoftDeletes, LogsActivity;

    protected $table = 'emails';

    protected $fillable = [
        'subject',
        'addressee',
        'message',
        'status',
        'user_id',
    ];

    protected static $logAttributes = ['*'];

    protected static $logOnlyDirty = true;

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function getStatusBooleanAttribute()
    {
        if ($this->status == 0) {
            $status = 'no enviado';
        }else{
            $status = 'enviado';
        }
        return $status;
    }
}