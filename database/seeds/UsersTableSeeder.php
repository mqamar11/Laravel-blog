<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = User::create([
            'name' => 'qamar',
            'email' => 'qmr@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1

        ]);

        Profile::create([

            'user_id' => $user->id,
            'avatar' => 'uploads/posts/1.jpg',
            'about' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad inventore quae nemo eligendi aliquam necessitatibus commodi reiciendis exercitationem officiis non explicabo quo placeat pariatur libero, modi in tenetur tempore a?',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }


}
