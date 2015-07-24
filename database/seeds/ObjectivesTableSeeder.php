<?php

use Illuminate\Database\Seeder;

class ObjectivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('objectives')->insert([
    		['type' => 'OBJECTIVE_#1', 'status_id' => 4, 'mission_id' => 1],
    		['type' => 'OBJECTIVE_#2', 'status_id' => 4, 'mission_id' => 1],
    		['type' => 'OBJECTIVE_#3', 'status_id' => 4, 'mission_id' => 1],
    		['type' => 'OBJECTIVE_#4', 'status_id' => 4, 'mission_id' => 1],
    		['type' => 'OBJECTIVE_#5', 'status_id' => 4, 'mission_id' => 1],
    		['type' => 'OBJECTIVE_#6', 'status_id' => 4, 'mission_id' => 5],
    		['type' => 'OBJECTIVE_#7', 'status_id' => 4, 'mission_id' => 5],
    		['type' => 'OBJECTIVE_#8', 'status_id' => 4, 'mission_id' => 5],
    		['type' => 'OBJECTIVE_#9', 'status_id' => 4, 'mission_id' => 5],
    		['type' => 'OBJECTIVE_#10', 'status_id' => 4, 'mission_id' => 5],
		]);
    }
}
