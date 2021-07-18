<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 */

class Car extends Model
{
    use HasFactory;

    protected $guarded = [];

    public const AUTOMATIC  = "Automatic";
    public const MECHANICAL = "Mechanical";

    public const DIESEL      = "Diesel";
    public const GASOLINE    = "Gasoline";
    public const GAS         = "Gas";
    public const PETROL_GAS  = "Petrol / Gas";
    public const ELECTRICITY = "Electricity";
    public const OTHER       = "Other";

    public const GEARBOX = [
        self::AUTOMATIC,
        self::MECHANICAL,
    ];

    public const FUEL_TYPE = [
        self::DIESEL,
        self::GASOLINE,
        self::GAS,
        self::PETROL_GAS,
        self::ELECTRICITY,
        self::OTHER,
    ];

    public function parts()
    {
        return $this->belongsToMany(Part::class);
    }

}
