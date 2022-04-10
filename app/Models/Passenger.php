<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Passenger extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'Name',
        'Passport',
        'Telephone'
    ];


    public function tickets(): BelongsToMany
    {
        return $this->belongsToMany(Ticket::class, 'passenger_ticket','passenger_id', 'ticket_id');
    }
}
