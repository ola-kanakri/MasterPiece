<?php

namespace App\Models;

use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
     
    ];

    public function scopeFilter($query , array $filters){
        if($filters['search'] ?? false){
            $query->where('name' , 'like' , '%' . request('search') . '%');
        }
    }


    public function users(){
        return $this->hasMany(User::class);
    }

    public function packages(){
        return $this->hasMany(Package::class);
    }
}
