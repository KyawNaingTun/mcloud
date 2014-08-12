<?php

class CommentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('comment')->delete();

        //  for comment table
            //  It is admin posts
        Post::create(array(
            'comment' => 'ဒါက comment',
            'user_id' => 3,
            'post_id' => 6,
            ));
        Post::create(array(
            'comment' => 'ဒါက comment',
            'user_id' => 3,
            'post_id' => 7,
            ));
        Post::create(array(
            'comment' => 'ဒါက comment',
            'user_id' => 3,
            'post_id' => 8,
            ));
        Post::create(array(
            'comment' => 'ဒါက comment',
            'user_id' => 3,
            'post_id' => 9,
            ));
        
        

        $this->command->info('Comment datas have benn finished!');
    }
}