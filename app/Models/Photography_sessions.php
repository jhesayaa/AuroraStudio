<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photography_sessions extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function photographer()
    {
        return $this->belongsTo(Photographers::class, 'photographer_id');
    }
    public function booking()
    {
        return $this->hasMany(Bookings::class, 'customer');
    }
    protected $fillable = [
        'photographer_id',
        'customer',
        'status_aktif',
        'date',
    ];
}
