<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('123456'),
            'role'=>'user_read|user_write|banner_read|banner_write|category_read|category_write|post_read|post_write|salon_read|salon_write',
        ]);
    }
}
