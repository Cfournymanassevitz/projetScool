<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meows extends Model
{
    use HasFactory;
    protected $fillable = ['content'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function definition()
    {
        return [
            'content' => $this->faker->sentence
        ];
    }
}
