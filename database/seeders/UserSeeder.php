<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'admin',
            'nim' => 'admin',
            'prodi' => 'si',
            'fakultas' => 'fst',
            'password' => Hash::make('admin'),
            'admin' => true,
        ]);
      
    }
}
