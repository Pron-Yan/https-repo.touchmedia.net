<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use Carbon\Carbon;
class Message extends Model
{ 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
public function getCreatedAtAttribute($date){
    return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('D H:i A');
}
    
}
