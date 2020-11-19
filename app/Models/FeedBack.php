<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    protected $fillable = ['user_id', 'email', 'subject', 'description'];
    public $timestamps = false;
}
