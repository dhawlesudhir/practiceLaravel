<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function Customer():BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
