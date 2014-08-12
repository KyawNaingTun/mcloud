<?php

class RoleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('role')->delete();

        //  for role table
        $admin = Role::create(array(
            'name' => 'admin'
            ));
        $normal = Role::create(array(
            'name' => 'normal'
            ));
        $professional = Role::create(array(
            'name' => 'professional'
            ));

        $this->command->info('Role datas have benn finished!');
    }
}