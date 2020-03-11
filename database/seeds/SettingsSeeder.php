<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'blog_name' => 'Adly Blog',
            'blog_email' => 'ahmedadly132@gmail.com',
            'phone_number' => '01099758332',
            'address' => 'El-Emam El-Shaf3y,Cairo,Egypt',
        ]);
    }
}
