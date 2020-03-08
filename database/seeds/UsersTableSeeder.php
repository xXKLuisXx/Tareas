<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users = new User();
        $users->name = 'Luis';
        $users->email = 'usuario@usuario.com';
        $users->password = Hash::make('123456789');
        $users->save();

    }
}
