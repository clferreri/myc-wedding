<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BackofficeUser extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    protected $table = 'backoffice_users';
    protected $hidden = ['pass', 'password'];

    public function name()
    {
        return $this->name;
    }

    public function getAuthPassword()
    {
        return $this->pass;
    }
}
