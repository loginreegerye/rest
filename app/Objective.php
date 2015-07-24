<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
	protected $table = 'objectives';

	protected $fillable = ['type'];

	protected $hidden = ['status_id', 'mission_id', 'created_at', 'updated_at'];

	public function status()
	{
		return $this->belongsTo('App\Status', 'status_id', 'id');
	}

	public function mission()
	{
		return $this->belongsTo('App\Mission', 'mission_id', 'id');
	}
}
