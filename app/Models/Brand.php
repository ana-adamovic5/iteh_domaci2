<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
        'contact_email',
        'contact_phone'
    ];

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }
}
