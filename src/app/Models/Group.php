<?php

namespace App\Models;

use FFI\CData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'active_campaign'];
    
    public function city() {
        return $this->hasMany(City::class, 'group','id');
    }
    
    public function campaign() {
        return $this->hasMany(Campaign::class, 'group','id');
    }
}
