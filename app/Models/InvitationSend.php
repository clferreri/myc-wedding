<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvitationSend extends Model
{
    use HasFactory;
    protected $table = 'invitation_sends';

    protected $fillable = ['invitation_id', 'guest_id', 'token', 'created_at', 'send_at', 'confirmed_at'];
}
