<?php

namespace App\Models;

use App\Models\User;
use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    
    use HasFactory;

    public function scopeFilter($query , array $filters){
        if($filters['search'] ?? false){
            $query->where('id' , 'like' , '%' . request('search') . '%')
            ->orWhere('user_id' , 'like' , '%' . request('search') . '%')
            ->orWhere('status' , 'like' , '%' . request('search') . '%');
        }
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function packages(){
        return $this->hasMany(Package::class);
    }


}
