<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * 
     */
    public function run(): void
    {
        $users = [];
        $faker = Factory::create();
        $i;

        for ($i = 1; $i <= 5; $i++){
            $posts[] = [
                'title' => $faker -> word,
                'excerpt' => $faker -> sentence(mt_rand(5,8)),
                'content' => $faker -> paragraph,
                'image' => $faker -> imageUrl,
                'author_id' => mt_rand (1, 10)

            ];
        }
        DB :: table ('posts') -> insert ($posts);
    }
}
