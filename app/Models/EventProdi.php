<?php

namespace App\Models;

use App\Models\ProgramStudi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventProdi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ProgramStudi()
    {
        return $this->belongsTo(ProgramStudi::class, 'prodi_id');
    }

}
