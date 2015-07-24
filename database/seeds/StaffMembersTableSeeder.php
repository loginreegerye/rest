<?php

use Illuminate\Database\Seeder;

class StaffMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('staff_members')->insert([
    		['name' => 'MEMBER_#1', 'position' => 'worker', 'mission_id' => 1],
    		['name' => 'MEMBER_#2', 'position' => 'head', 'mission_id' => 1],
    		['name' => 'MEMBER_#3', 'position' => 'worker', 'mission_id' => 1],
    		['name' => 'MEMBER_#4', 'position' => 'worker', 'mission_id' => 1],
    		['name' => 'MEMBER_#5', 'position' => 'head', 'mission_id' => 5],
    		['name' => 'MEMBER_#6', 'position' => 'worker', 'mission_id' => 5],
    		['name' => 'MEMBER_#7', 'position' => 'worker', 'mission_id' => 5],
    		['name' => 'MEMBER_#8', 'position' => 'worker', 'mission_id' => 5],
    		['name' => 'MEMBER_#9', 'position' => 'worker', 'mission_id' => 5],
    		['name' => 'MEMBER_#10', 'position' => 'head', 'mission_id' => 5],
		]);
    }
}
