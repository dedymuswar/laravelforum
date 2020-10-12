<?php

namespace App\Model;

use App\Model\Reply;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=['title', 'slug', 'body', 'category_id', 'user_id'];

    // mendefenisikan route key name tabel question adalah kolom slug
    // jadi jika request data berdasarkan slug bukan id lagi
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}
