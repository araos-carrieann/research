<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;
    
    public function municipalities()
    {
        return $this->hasMany(Barangay::class);
    }
}
