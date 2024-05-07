<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'quantity'];

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';
    public function user()
    {
    return $this->belongsTo('\App\Models\User','orderName','name');
    }
}

