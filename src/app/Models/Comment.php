<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'goods_id', 'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function goods()
    {
        return $this->belongsTo(Goods::class);
    }
}
