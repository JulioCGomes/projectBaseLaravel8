<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Referênciando qual tabela que esse model representa.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * Referênciando quais os campos que podem ser preenchido.
     * 
     * @var array
     */
    protected $fillable = [
        'title',
        'content'
    ];
}
