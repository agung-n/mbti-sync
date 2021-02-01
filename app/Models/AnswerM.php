<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerM extends Model
{
    use HasFactory;

    protected $table = "mst_answer";
    protected $fillable = ['id_question','text','value_e','value_s','value_t','value_j'];

}
