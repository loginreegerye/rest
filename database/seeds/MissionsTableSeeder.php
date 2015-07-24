<?php

use Illuminate\Database\Seeder;

class MissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('missions')->insert([
    		['name' => 'MISSION_#1', 'status_id' => 1], //PLANNED
    		['name' => 'MISSION_#2', 'status_id' => 2], //IN PROGRESS
    		['name' => 'MISSION_#3', 'status_id' => 3], //CANCELED
    		['name' => 'MISSION_#4', 'status_id' => 5], //FINNISHED
    		['name' => 'MISSION_#5', 'status_id' => 1], //PLANNED
		]);
    }
}
