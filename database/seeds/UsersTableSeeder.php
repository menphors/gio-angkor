<?php

use Illuminate\Database\Seeder;
use App\Users;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed user admin and shop manager
        $u1 = Users::create([
            'name'=> 'phors',
            'first_name' => "Phors",
            'last_name' => "Men",
            "gender" => "f",
            "dob" => "1995/05/15",
            "username" => "phorsmen",
            "email" => "menphorsqty@gmail.com",
            "password" => "123456",
            "level_id" => 1,
            "address" => "Phnom Penh",
            "tel" => "087544471",
            "published" =>1,
            "admin" => 1,
        ]);

        $u1 = Users::create([
            'name'=> 'gioangkor',
            'first_name' => "gio",
            'last_name' => "gio",
            "gender" => "m",
            "dob" => "1995/05/15",
            "username" => "phorsmen",
            "email" => "men.phors95@gmail.com",
            "password" => "123456@abc",
            "level_id" => 2,
            "address" => "Phnom Penh",
            "tel" => "087544471",
            "published" =>1,
            "admin" => 0,
        ]);
    }
}
