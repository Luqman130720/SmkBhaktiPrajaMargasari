<?php

namespace App\Models;

use App\Models\EventProdi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramStudi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function events()
    {
        return $this->hasMany(EventProdi::class, 'prodi_id');
    }
}
