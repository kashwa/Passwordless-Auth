<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserLoginToken extends Model
{
    protected $table = 'users_login_tokens';

    protected $fillable = [
        'token'
    ];

    /**
     * Binding Relationship
     * between classes.
     * 
     * @return relation.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
