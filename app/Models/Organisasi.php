<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    // public function eventorganisasi()
    // {
    //     return $this->hasMany(EventOrganisasi::class, 'organisasi');
    // }
    public function events()
    {
        return $this->hasMany(EventOrganisasi::class, 'organisasi_id');
    }
}
