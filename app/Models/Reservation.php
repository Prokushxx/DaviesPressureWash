<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
      'time',
      'date',
      'user_id',
      'service_id',
    ];

   public function users(){
      return $this->belongsTo(User::class);
    }
    public function services(){
      return $this->belongsTo(Service::class);
    }
}
