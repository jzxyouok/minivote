<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteOption extends Model
{
    protected $table = 'vote_option';

    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    public function user()
    {
        return User::find($this->user_id);
    }
}
