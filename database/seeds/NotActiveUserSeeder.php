<?php

use Illuminate\Database\Seeder;
use App\Traits\NewUsersTrait;

class NotActiveUserSeeder extends Seeder
{
    use NewUsersTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUser([
            'email'=>'NotActive@gmail.com',
            'active'=>0
        ]);

    }
}
