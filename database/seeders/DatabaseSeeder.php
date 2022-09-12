<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Barang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Barang::create([
            'nama_barang' => 'Senjata Api'
        ]);
        Barang::create([
            'nama_barang' => 'Bensin'
        ]);
        Barang::create([
            'nama_barang' => 'Minyak Tanah'
        ]);
        Barang::create([
            'nama_barang' => 'Spiritus'
        ]);
    }
}
