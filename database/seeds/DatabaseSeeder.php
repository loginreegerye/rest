<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(StatusesTableSeeder::class);
        $this->call(MissionsTableSeeder::class);
        $this->call(StaffMembersTableSeeder::class);
        $this->call(ObjectivesTableSeeder::class);

        Model::reguard();
    }
}
