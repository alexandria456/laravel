<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ticket extends Model
{
    public function flights(): BelongsTo
    {
        return $this->belongsTo(flight::class, 'id');

    }

    public function passengers(): BelongsToMany
    {
        return $this->belongsToMany(Passenger::class, 'passenger_ticket', 'ticket_id', 'passenger_id');
    }

    protected $table = 'tickets';
    public $timestamps = false;
    protected $fillable = ['Price', 'Seat', 'id_Flight'];


}
