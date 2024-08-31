<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'template_id'
    ];


    public function user()
    {
        return $this->belongsTo('User::class', 'user_id', 'id');
    }
    public function template()
    {
        return $this->belongsTo('Template::class', 'template_id', 'id');
    }
}
