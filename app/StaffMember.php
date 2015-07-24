<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffMember extends Model
{
	protected $table = 'staff_members';

	protected $fillable = ['name'];

	protected $hidden = ['mission_id', 'created_at', 'updated_at'];

	public function mission()
	{
		return $this->belongsTo('App\Mission', 'mission_id', 'id');
	}
}
