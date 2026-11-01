<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // <-- ОБЯЗАТЕЛЬНО

class Olympic extends Model
{
    use HasFactory, SoftDeletes; // <-- ОБЯЗАТЕЛЬНО

    protected $fillable = [
        'title',
        'year',
        'city',
        'country',
        'description',
        'image',
    ];

    // МУТАТОР: делает первую букву заглавной
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
    }
}