<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\LogPengunjung;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $faker = FakerFactory::create('id_ID');

        \App\Models\User::create([
            'name' => 'Zacky Shifa Juanda',
            'username' => 'juanda221',
            'password' => Hash::make('shifa122')
        ]);

        \App\Models\Kategori::create([
            'name' => 'Router',
            'slug' => Str::slug('Router')
        ]);

        \App\Models\Kategori::create([
            'name' => 'Kabel',
            'slug' => Str::slug('Kabel')
        ]);

        \App\Models\Kategori::create([
            'name' => 'CCTV',
            'slug' => Str::slug('CCTV')
        ]);

        \App\Models\Projek::create([
            'name' => 'APD Using Yolo V6',
            'mitra' => 'Pema Global Energi',
            'thumbnail' => $faker->imageUrl(640, 480, 'people', true, 'Faker')
        ]);

        \App\Models\Projek::create([
            'name' => 'Chat Bot Using AI',
            'mitra' => 'Rumah Sakit Cut Mutia',
            'thumbnail' => $faker->imageUrl(640, 480, 'people', true, 'Faker')
        ]);

        \App\Models\Produk::create([
            'name' => 'Router Huawai',
            'harga' => 500000,
            'thumbnail' => $faker->imageUrl(640, 480, 'people', true, 'Faker'),
            'deskripsi' => 'asdajshdasndjansjdnajsdnjaksdnkjasndjkankdjnaskjd',
            'id_kategori' => 1
        ]);

        \App\Models\Produk::create([
            'name' => 'Router Samsung',
            'harga' => 450000,
            'thumbnail' => $faker->imageUrl(640, 480, 'people', true, 'Faker'),
            'deskripsi' => 'asdajshdasndjansjdnajsdnjaksdnkjasndjkankdjnaskjd',
            'id_kategori' => 1
        ]);

        \App\Models\Produk::create([
            'name' => 'Kabel LAN UTP Cat 6',
            'harga' => 150000,
            'thumbnail' => $faker->imageUrl(640, 480, 'people', true, 'Faker'),
            'deskripsi' => 'asdajshdasndjansjdnajsdnjaksdnkjasndjkankdjnaskjd',
            'id_kategori' => 2
        ]);

        \App\Models\Produk::create([
            'name' => 'Fiber Optik',
            'harga' => 200000,
            'thumbnail' => $faker->imageUrl(640, 480, 'people', true, 'Faker'),
            'deskripsi' => 'asdajshdasndjansjdnajsdnjaksdnkjasndjkankdjnaskjd',
            'id_kategori' => 2
        ]);

        \App\Models\Produk::create([
            'name' => 'Outdoor CCTV HiLook',
            'harga' => 350000,
            'thumbnail' => $faker->imageUrl(640, 480, 'people', true, 'Faker'),
            'deskripsi' => 'asdajshdasndjansjdnajsdnjaksdnkjasndjkankdjnaskjd',
            'id_kategori' => 3
        ]);

        LogPengunjung::factory()->count(50)->create();
    }
}
