<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::insert([
            [
                'name' => 'J.K. Rowling',
                'photo' => 'https://randomuser.me/api/portraits/women/10.jpg',
                'bio' => 'Penulis terkenal asal Inggris, pencipta seri legendaris Harry Potter.',
            ],
            [
                'name' => 'George R.R. Martin',
                'photo' => 'https://randomuser.me/api/portraits/men/11.jpg',
                'bio' => 'Penulis epik fantasi A Song of Ice and Fire yang diadaptasi menjadi Game of Thrones.',
            ],
            [
                'name' => 'Haruki Murakami',
                'photo' => 'https://randomuser.me/api/portraits/men/12.jpg',
                'bio' => 'Penulis asal Jepang dengan gaya realisme magis dan introspektif.',
            ],
            [
                'name' => 'Agatha Christie',
                'photo' => 'https://randomuser.me/api/portraits/women/13.jpg',
                'bio' => 'Ratu novel detektif dunia, terkenal dengan tokoh Hercule Poirot dan Miss Marple.',
            ],
            [
                'name' => 'Dan Brown',
                'photo' => 'https://randomuser.me/api/portraits/men/14.jpg',
                'bio' => 'Penulis novel misteri dan thriller seperti The Da Vinci Code dan Angels & Demons.',
            ],
        ]);
    }
}