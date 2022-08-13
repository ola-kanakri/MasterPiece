<?php

namespace App\Models;

use App\Models\City;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{

    protected $fillable = [
        'doner_name',
        'category_id',
        'condition',
        'products_number',
        'title',
        'phone_number',
        'city_id',
        'image',
        'description',
    ];

    public function scopeFilter($query , array $filters){
        if($filters['search'] ?? false){
            $query->where('doner_name' , 'like' , '%' . request('search') . '%')
            ->orWhere('phone_number' , 'like' , '%' . request('search') . '%')
            ->orWhere('description' , 'like' , '%' . request('search') . '%')
            ->orWhere('title' , 'like' , '%' . request('search') . '%');
        }
    }

    use HasFactory;
    use SoftDeletes;
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }






}
