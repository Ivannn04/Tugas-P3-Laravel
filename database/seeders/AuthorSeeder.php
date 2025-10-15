<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::insert([
            ['name' => 'J.K. Rowling', 'bio' => 'Penulis seri Harry Potter.'],
            ['name' => 'George R.R. Martin', 'bio' => 'Penulis seri A Song of Ice and Fire.'],
            ['name' => 'Haruki Murakami', 'bio' => 'Penulis asal Jepang dengan gaya magis realisme.'],
            ['name' => 'Agatha Christie', 'bio' => 'Ratu novel detektif dunia.'],
            ['name' => 'Dan Brown', 'bio' => 'Penulis The Da Vinci Code.'],
        ]);
    }
}
