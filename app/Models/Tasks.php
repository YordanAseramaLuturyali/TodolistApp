<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tasks extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query,array $request){
        if(isset($request['search']) ? $request['search'] : false){
            return $query->where('slug','like','%' . $request['search'] . '%')->orWhere('todo','like','%'.$request['search'].'%');
        }
    }
}
