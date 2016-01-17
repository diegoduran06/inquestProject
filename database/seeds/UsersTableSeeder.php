<?php

use Illuminate\Database\Seeder;
use Inquestpro\User;
use Inquestpro\Post;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        factory(Inquestpro\User::class,10)->create()->each(function($user){
            $post = factory(Inquestpro\Post::class)->make();
            $user->posts()->save($post);
        });
    }
}
