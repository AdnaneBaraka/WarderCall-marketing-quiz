<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionnaireUser extends Model
{
    use HasFactory;

    protected $fillable = ['questionnaire_id', 'user_id', 'Admis','date'];
    public function questionnaire()
    {
        return $this->belongsTo( Questionnaire::class, ' questionnaire_id');
    }
    public function user()
    {
        return $this->belongsTo( User::class, 'user_id');
    }

}
