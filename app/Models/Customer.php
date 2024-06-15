<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'customer_id';

    public function country()
    {
        return $this->belongsTo(country::class);
    }

    public function state()
    {
        return $this->belongsTo(state::class);
    }

    public function city()
    {
        return $this->belongsTo(city::class);
    }
}
