<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

//    public static function boot()
//    {
//        static::creating(function ($model) {
//            while (true) {
//                $hash = Str::random(6);
//
//                if (!self::query()->where('hash', $hash)->exists()) {
//                    break;
//                }
//            }
//
//            $model->hash = $hash;
//        });
//    }

    protected $fillable = [
        'hash',
        'url'
    ];
}
