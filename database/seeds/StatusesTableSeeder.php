<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('statuses')->insert([
    		['status' => 'PLANNED'],
    		['status' => 'IN PROGRESS'],
    		['status' => 'CANCELED'],
    		['status' => 'ACHIEVED'],
    		['status' => 'FINNISHED'],
		]);
    }
}
