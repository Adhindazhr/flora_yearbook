<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    
    public function run()
    {
        // ->insert merupakan eloquent orm
        DB::table('akun')->insert([
            [
                'username' => 'admin',
                'password' => Hash::make('123'),
                'role' => 'admin',
            ],
            [
                'username' => 'siswa',
                'password' => Hash::make('123'),
                'role' => 'siswa',
            ],
            [
                'username' => 'guru',
                'password' => Hash::make('123'),
                'role' => 'guru',
            ],
        ]);
    }
}