<?php

use Illuminate\Database\Seeder;
use CodeDelivery\Models\User;
use CodeDelivery\Models\Client;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::Class, 10)->create()->each(function($u) {
        	$u->client()->save(factory(Client::class)->make());
        });

    }
}
