<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parfume extends Model
{
    use HasFactory;

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
