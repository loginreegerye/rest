<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
	protected $table = 'missions';

	protected $fillable = ['name'];

	protected $hidden = ['status_id', 'created_at', 'updated_at'];

	public function status()
	{
		return $this->belongsTo('App\Status', 'status_id', 'id');
	}

	public function staffMembers()
	{
		return $this->hasMany('App\StaffMember', 'mission_id', 'id');
	}

	public function objectives()
	{
		return $this->hasMany('App\Objective', 'mission_id', 'id');
	}
}
