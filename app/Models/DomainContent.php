<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'domain_id',
        'title',
        'h1_title',
        'h1_des',
        'h2_title',
        'h2_des',
    ];

    public function domain()
    {
        return $this->belongsTo(Domain::class, 'domain_id', 'id');
    }
}
