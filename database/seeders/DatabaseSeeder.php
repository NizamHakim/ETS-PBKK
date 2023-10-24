<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Jenis;
use App\Models\Item;
use App\Models\Kondisi;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        User::create([
            'name' => 'Nizam Hakim',
            'email' => 'nizamhakim282@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);
        
        Item::factory(10)->create();

        Jenis::create([
           'nama' => 'tabung', 
        ]);
        Jenis::create([
            'nama' => 'pipet', 
        ]);

        Kondisi::create([
            'nama' => 'baik', 
        ]);
        Kondisi::create([
            'nama' => 'layak', 
        ]);
        Kondisi::create([
            'nama' => 'rusak', 
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
