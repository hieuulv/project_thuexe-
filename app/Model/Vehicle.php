<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    protected $fillable = [
        'city_id',
        'user_id',
        'district_id',
        'utility_id',
        'procedure_id',
        'gear_id',
        'model_id',
        'license_plate',
        'name',
        'price',
        'seat',
        'capacity',
        'description',
        'address',
        'view',
        'status',
    ];

    public function modelVehicles()
    {
        return $this->hasMany(ModelVehicle::class, 'model_id');
    }

    public function gears()
    {
        return $this->hasMany(Gear::class, 'gear_id');
    }

    public function utilitys()
    {
        return $this->hasMany(Utility::class, 'utility_id');
    }

    public function procedures()
    {
        return $this->hasMany(Procedure::class, 'procedure_id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }

    public function citys()
    {
        return $this->hasMany(City::class, 'city_id');
    }

    public function districts()
    {
        return $this->hasMany(District::class, 'district_id');
    }
    public function images()
    {
        return $this->belongsTo(Image::class);
    }

}
