<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformationGenerated extends Model
{
    protected $fillable = ['content', 'letter_id', 'user_id', 'bulletin_id'];

    public function letter()
    {
        return $this->belongsTo(Letter::class, 'letter_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bulletin()
    {
        return $this->belongsTo(Bulletin::class);
    }
}
