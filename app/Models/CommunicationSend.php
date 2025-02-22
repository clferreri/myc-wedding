<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunicationSend extends Model
{
    use HasFactory;

    protected $table = 'communications_sent';
    public $timestamps = true;

    protected $fillable = ['communication_id', 'guest_id', 'created_at'];


    public function communication()
    {
        return $this->belongsTo(Communication::class, 'id');
    }
}
