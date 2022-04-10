<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class flight extends Model
{
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'id_Flight');
    }

    public $timestamps = false;
    use HasFactory;

    /**
     * @var mixed|string
     */
    private $Destination;
    private $Prices;
    protected $fillable = ['Destination', 'Departure', 'TravelTime', 'DepartureDates', 'Prices'];


    public static function whereNull(string $string)
    {
    }

}
