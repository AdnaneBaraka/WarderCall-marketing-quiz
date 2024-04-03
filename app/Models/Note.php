<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id','reponse_id','questionnaire_id','note', 'question_id'];

    public function question()
    {
        return $this->belongsTo( Question::class, 'question_id');
    }
    public function questionnaire()
    {
        return $this->belongsTo( Questionnaire::class, ' questionnaire_id');
    }
    public function user()
    {
        return $this->belongsTo( User::class, 'user_id');
    }
    public function reponse()
    {
        return $this->belongsTo(Reponse::class, 'response_id');
    }
}
