<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Inquiries extends Model
{
    protected $table = 'inquiries';
    protected $fillable = ['firstname','lastname','mobile','level'];
}
