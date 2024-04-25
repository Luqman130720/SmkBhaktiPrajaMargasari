<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitUsaha extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function events()
    {
        return $this->hasMany(EventUnitUsaha::class, 'unit_usaha_id');
    }
}
