<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquireLead extends Model
{
    use HasFactory;
    public $table = 'enquire_leads';
    public $timestamps = false;
}
