<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        // for user table
        User::create(array(
            'fullname' => 'kyawnaingtun',
            'email' => 'kyawnainghtun93@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1
            ));
        User::create(array(
            'fullname' => 'sismuemaw',
            'email' => 'sismuemaw@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 2
            ));
        User::create(array(
            'fullname' => 'khatkhat',
            'email' => 'khatkhat@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 3
            ));

        $this->command->info('User datas have benn finished!');
    }
}