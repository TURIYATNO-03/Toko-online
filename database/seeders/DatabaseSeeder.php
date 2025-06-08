<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '089693612443',
            'password' => bcrypt('P@55word'),
        ]);

        User::create([
            'nama' => 'Turiyatno',
            'email' => 'ennoguard245@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '081915656892',
            'password' => bcrypt('19231140'),
        ]);
        
        #data kategori
        kategori::create([
            'nama_kategori' => 'Brownies',
        ]);
        kategori::create([
            'nama_kategori' => 'Combro',
        ]);
        kategori::create([
            'nama_kategori' => 'Dawet',
        ]);
        kategori::create([
            'nama_kategori' => 'Mochi',
        ]);
        kategori::create([
            'nama_kategori' => 'Wingko',
        ]);
    }
}
