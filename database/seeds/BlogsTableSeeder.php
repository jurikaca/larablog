<?php

use Illuminate\Database\Seeder;

use App\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $blog_one = new Blog();
        $blog_one->title = 'Getting started with GIT';
        $blog_one->slug = 'getting-started-with-git';
        $blog_one->meta_title = 'Create an account in Github';
        $blog_one->meta_desc = 'Create an account in Github';
        $blog_one->body = 'Lets get started with the basics of git. The first thing you need to do is install it in your computer. Just go to git website and simply install it.
        Now you can go to terminal in mac or command line in windows and start using it. But dont rush yet, lets go to github instead.';
        $blog_one->save();

        $blog_two = new Blog();
        $blog_two->title = 'Create an account in Github';
        $blog_two->slug = 'create-an-account-with-github';
        $blog_two->meta_title = 'Create an account in Github';
        $blog_two->meta_desc = 'Create an account in Github';
        $blog_two->body = 'Its time to create an account in github if you havent already done so. It is a wonderful place for web developers, trust me on this. Here you can host code repositories for free.
        Once you are in, click on the new repository button to get started. just type in the name you want and click create. I am naming it project.';
        $blog_two->save();
    }
}
