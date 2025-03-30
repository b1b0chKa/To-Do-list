<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

	protected $fillable = ['name', 'user_id'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function tags()
	{
		return $this->belongsToManyMany(Tag::class);
	}

	public function tasks()
	{
		return $this->belongsToMany(Task::class);
	}
}
