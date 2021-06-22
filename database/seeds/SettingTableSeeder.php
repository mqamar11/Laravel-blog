<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

            'site_name' => "Laravel\'s Blog",
            'contact' => '03000-00011000',
            'email' => 'info@laravel_blog.com',
            'address' => 'Johar Town Lahore'
        ]);
    }
}
