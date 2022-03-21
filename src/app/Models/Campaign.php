<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'group'];
    
    public function group() {
        return $this->belongsTo(Group::class, 'group','id');
    }
    
    public function discount() {
        return $this->hasOne(Discount::class, 'campaign','id');
    }
    
    public function product() {
        return $this->hasMany(Product::class, 'campaign','id');
    }
}
