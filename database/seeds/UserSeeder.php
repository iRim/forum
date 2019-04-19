<?php

use Illuminate\Database\Seeder;
use App\Traits\NewUsersTrait;

class UserSeeder extends Seeder
{

    use NewUsersTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUser('user@gmail.com');

    }
}
