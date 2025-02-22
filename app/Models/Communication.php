<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    use HasFactory;

    protected $table = 'communications';
    public $timestamps = true;

    protected $fillable = ['title', 'message', 'image_url', 'group_id'];

    public function communicationsSent()
    {
        return $this->hasMany(CommunicationSend::class, 'communication_id');
    }

    public function guests()
    {
        return $this->hasMany(Guest::class, 'group_id', 'group_id');
    }
}
