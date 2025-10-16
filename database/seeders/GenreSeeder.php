<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        Genre::insert([
            [
                'name' => 'Fantasy',
                'description' => 'Cerita fiksi dengan unsur magis dan dunia imajinatif.'
            ],
            [
                'name' => 'Science Fiction',
                'description' => 'Cerita yang berfokus pada sains, teknologi, dan masa depan.'
            ],
            [
                'name' => 'Romance',
                'description' => 'Cerita tentang cinta dan hubungan emosional antar tokoh.'
            ],
            [
                'name' => 'Horror',
                'description' => 'Cerita yang dirancang untuk menakut-nakuti dan menegangkan pembaca.'
            ],
            [
                'name' => 'Mystery',
                'description' => 'Cerita penuh teka-teki yang biasanya melibatkan penyelidikan atau detektif.'
            ],
        ]);
    }
}
