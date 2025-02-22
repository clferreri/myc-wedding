<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $table = 'guests';
    public $timestamps = true;

    protected $fillable = ['name', 'surname', 'email', 'phone', 'quantity_of_invitations'];
}
