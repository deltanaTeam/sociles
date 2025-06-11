<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;
  
  // In App\Models\Follower
  
  protected $table = 'followers';
public function followerUser()
{
    return $this->belongsTo(User::class, 'user_id');
}
  
  public function followedUser()
{
    return $this->belongsTo(User::class, 'follow_id', 'id'); // Adjust 'follow_id' if needed
}

}

