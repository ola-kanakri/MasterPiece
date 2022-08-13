<?php

namespace App\Models;

use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'image',
        'desc',
    ];

    public function scopeFilter($query , array $filters){
        if($filters['search'] ?? false){
            $query->where('name' , 'like' , '%' . request('search') . '%')
            ->orWhere('desc' , 'like' , '%' . request('search') . '%');
        }
    }

    public function packages(){
        return $this->hasMany(Package::class);
    }
}
