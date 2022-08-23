<?php

namespace Database\Seeders;

use App\Models\Articles;
use App\Models\Categories;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class Article extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $user  = User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => Hash::make('12345678'),
        ]);

        $categories = Categories::create([
            'name' => $faker->name,
            'user_id' => $user->id
        ]);

        $articles = Articles::create([
            'category_id' => $categories->id,
            'user_id' => $user->id,
            'title' => $faker->title,
            'content' => $faker->text,
            'image' =>$faker->imageUrl
        ]);
    }
}
