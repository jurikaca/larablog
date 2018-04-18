<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_one = new User();
        $user_one->role_id = 1;
        $user_one->name = 'Ryan Dhungel';
        $user_one->about = 'My name is Ryan Dhungel';
        $user_one->website = 'kaloraat.com';
        $user_one->facebook = 'facebook.com/ryan.dhungel';
        $user_one->twitter = 'twitter.com/dhungelryan';
        $user_one->github = 'github.com/kaloraat';
        $user_one->username = 'ryan';
        $user_one->email = 'ryan@kaloraat.com';
        $user_one->password = bcrypt('password');
        $user_one->save();
    }
}
