<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed a user with username "admin" and password "admin"
        DB::table('users')->insert([
            'name' => 'Admin',
            // Menggunakan 'name' sesuai dengan skema tabel
            'username' => 'admin',
            'email' => 'admin@example.com',
            // Ganti dengan alamat email yang sesuai
            'password' => Hash::make('admin'),
            // Gunakan Hash::make() untuk mengenkripsi password
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}