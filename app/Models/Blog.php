<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  protected $table = 'blogs';

  protected $fillable = [
    'title', 'author', 'content', 'publication_date', 'summary', 'tags',
  ];

  protected $casts = [
    'tags' => 'array',
  ];
}
