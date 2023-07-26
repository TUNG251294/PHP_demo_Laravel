<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0;$i<50;$i++){
            Post::create([
                'title' => $faker -> sentence(3,true),
                'content' => $faker -> paragraphs(2, true)
            ]);
        }
    }
}
