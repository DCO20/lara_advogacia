<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = [
        'name',
        'email',
        'occupation',
        'phone',
        'image',
        'link_facebook',
        'link_linkdin',
        'link_instagram',
        'link_twitter'
    ];
}
