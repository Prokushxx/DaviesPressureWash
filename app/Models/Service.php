<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'cost',
      'pic',
    ];

    public function reservations(){
      return $this->hasMany(Reservation::class);
    }
}
