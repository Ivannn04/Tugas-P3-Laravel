<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'description' => 'Petualangan pertama Harry Potter melawan kekuatan gelap di Hogwarts.',
                'price' => 150000.00,
                'stock' => 25,
                'cover_photo' => 'https://picsum.photos/seed/hp1/400/600',
                'genre_id' => 2, // Fantasy
                'author_id' => 1,
            ],
            [
                'title' => 'A Game of Thrones',
                'description' => 'Kisah epik tentang perebutan takhta di dunia penuh intrik dan naga.',
                'price' => 175000.00,
                'stock' => 20,
                'cover_photo' => 'https://picsum.photos/seed/got/400/600',
                'genre_id' => 2, // Fantasy
                'author_id' => 2,
            ],
            [
                'title' => 'Kafka on the Shore',
                'description' => 'Novel surreal karya Haruki Murakami yang penuh simbol dan filosofi.',
                'price' => 160000.00,
                'stock' => 18,
                'cover_photo' => 'https://picsum.photos/seed/kafka/400/600',
                'genre_id' => 3, // Romance / Drama
                'author_id' => 3,
            ],
            [
                'title' => 'Murder on the Orient Express',
                'description' => 'Kasus pembunuhan misterius di kereta mewah yang diselidiki Hercule Poirot.',
                'price' => 140000.00,
                'stock' => 15,
                'cover_photo' => 'https://picsum.photos/seed/orient/400/600',
                'genre_id' => 4, // Mystery / Crime
                'author_id' => 4,
            ],
            [
                'title' => 'The Da Vinci Code',
                'description' => 'Thriller penuh teka-teki yang menggabungkan seni, sejarah, dan konspirasi.',
                'price' => 165000.00,
                'stock' => 22,
                'cover_photo' => 'https://picsum.photos/seed/davinci/400/600',
                'genre_id' => 1, // Action / Adventure
                'author_id' => 5,
            ],
        ]);
    }
}