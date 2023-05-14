<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricate extends Model
{
    use HasFactory;

    protected $table = 'fabricate';
    protected $guarded = ['id'];

    protected $fillable = [
        'Title',
        'Author',
        'Summary',
        'AN',
        'Genre',
        'Cover',
        'Content'
    ];

    public $timestamps = false;
}
