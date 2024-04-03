<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'image', 'response_id'];

    public function reponse()
    {
        return $this->belongsTo(Reponse::class, 'response_id');
    }
}
