<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['firstName', 'lastName', 'address', 'phoneNumber', 'userID'];
    public function vehicles()
{
    return $this->hasMany(Vehicule::class, 'clientID');
}
    public function reparations()
    {
        return $this->hasMany(Reparation::class);
    }

}
