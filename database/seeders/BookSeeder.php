<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            ['author_id' => 1, 'title' => 'Harry Potter and the Sorcerer\'s Stone', 'year' => 1997, 'summary' => 'Petualangan pertama Harry Potter.'],
            ['author_id' => 2, 'title' => 'A Game of Thrones', 'year' => 1996, 'summary' => 'Novel epik fantasi dari Westeros.'],
            ['author_id' => 3, 'title' => 'Kafka on the Shore', 'year' => 2002, 'summary' => 'Kisah surreal antara dua dunia.'],
            ['author_id' => 4, 'title' => 'Murder on the Orient Express', 'year' => 1934, 'summary' => 'Kasus misteri klasik Hercule Poirot.'],
            ['author_id' => 5, 'title' => 'The Da Vinci Code', 'year' => 2003, 'summary' => 'Thriller misteri simbol dan sejarah.'],
        ]);
    }
}
