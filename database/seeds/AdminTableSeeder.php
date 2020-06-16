<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->password = bcrypt("password");
        $user->email = "admin@virtual.com";
        $user->nomor = "081082021022";
        $user->admin = "1";
        $user->save();
    }
}
