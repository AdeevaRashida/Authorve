<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Published extends Model
{
    use HasFactory;

    protected $table = 'published';

    protected $fillable = [
        'Title',
        'Author',
        'Summary',
        'Genre',
        'Cover'
    ];

    public $timestamps = false;
}
