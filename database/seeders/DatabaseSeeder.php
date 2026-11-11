<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
       
            User::updateOrCreate(
                ['email' => 'admin@perpus.test'],
                ['name' => 'Admin', 'password' => 'password', 'role' => 'admin']
            );
        
            User::updateOrCreate(
                ['email' => 'siswa@perpus.test'],
                ['name' => 'Dimas', 'password' => 'password', 'role' => 'siswa', 'kelas' => 'XII RPL 2']
            );
        
            Book::updateOrCreate(
                ['title' => 'Laskar Pelangi'],
                ['author' => 'Andrea Hirata', 'publisher' => 'Bentang', 'year' => 2005, 'stock' => 4]
            );
        
            Book::updateOrCreate(
                ['title' => 'Bumi'],
                ['author' => 'Tere Liye', 'publisher' => 'Gramedia', 'year' => 2014, 'stock' => 3]
            );
        
            Book::updateOrCreate(
                ['title' => 'Belajar Laravel'],
                ['author' => 'Budi Raharjo', 'publisher' => 'Informatika', 'year' => 2023, 'stock' => 5]
            );
        }
    }
