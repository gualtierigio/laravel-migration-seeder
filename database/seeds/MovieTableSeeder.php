<?php

use Illuminate\Database\Seeder;
use App\Model\Movie;
use Faker\Generator as Faker;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $movies = [];

        // foreach($movies as $movie) {
        //     $newMovie = new Movie();
        //     $newMovie->title = $movie['title'];
        //     $newMovie->description = $movie['description'];
        //     $newMovie->director = $movie['director'];
        //     $newMovie->save();
    

        for ($i = 0 ; $i < 100; $i++) {
            $newMovie = new Movie();
            $newMovie->title = $faker->words(3, true);
            $newMovie->description = $faker->paragraph(8, true);
            $newMovie->director = $faker->name();
            
            $newMovie->slug = Str::slug($newMovie->title, '-');
            $newMovie->save();

        }
        
    }
}
