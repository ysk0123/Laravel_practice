<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function users()//Userモデルとのリレーションシップを定義しています
    {
        return $this->hasMany(User::class, 'company_id');
    }
    use HasFactory;//カンパニーメソッドを使ってモデルをインスタンスするためのトレイト
}
