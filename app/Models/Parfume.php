<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parfume extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'price',
        'size',
        'gender',
        'collection_id'
    ];

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
