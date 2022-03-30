<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'img_url' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d
                80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixli
                b=rb-1.2.1&auto=format&fit=crop&w=750&q=80+750w'
            ],

            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'img_url' => 'https://images.unsplash.com/photo-1589571894960-2
                0bbe2828d0a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&
                ixlib=rb-1.2.1&auto=format&fit=crop&w=350&q=80'
            ],

            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'img_url' => 'https://images.unsplash.com/photo-1552058544-f2b08
                422138a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixli
                b=rb-1.2.1&auto=format&fit=crop&w=350&q=80'
            ],

            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'img_url' => 'https://images.unsplash.com/photo-1491349174775-aa
                afddd81942?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8f
                GVufDB8fHw%3D&auto=format&fit=crop&w=350&q=80'
            ],

            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'img_url' => 'https://images.unsplash.com/photo-1544005313-94ddf
                0286df2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixli
                b=rb-1.2.1&auto=format&fit=crop&w=350&q=80'
            ],
        ]);
    }
}
