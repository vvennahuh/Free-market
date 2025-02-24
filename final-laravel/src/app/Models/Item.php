<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'img_url',
        'user_id',
        'condition_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function favoriteUsers()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function soldToUsers()
    {
        return $this->belongsToMany(User::class, 'purchases');
    }

    public function itemPayments()
    {
        return $this->belongsToMany(Payment::class, 'purchases');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'purchases');
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }
}
