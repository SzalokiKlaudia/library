<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    /** @use HasFactory<\Database\Factories\CopyFactory> */
    use HasFactory;

    protected $primaryKey = 'copy_id';

    protected $fillable = [ //autoinkrement értékeket ide nem írunk
        'book_id',
        'user_id',
        
    ];
}
