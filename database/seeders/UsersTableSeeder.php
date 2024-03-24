<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'nathan',
                'password' => '$2y$12$VBbo3rSQo3iS.Jp31GoU1.x1cDHE0lBSWuKGrBuUURw8zNMDlkW86',
                'name' => 'Nathan Nadeak',
                'email' => 'nathan@gmail.com',
                'nip' => '1234567890',
                'unit' => 'Information Technology',
                'bio' => 'Saya suka gym',
                'role' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'bryan',
                'password' => '$2y$12$VBbo3rSQo3iS.Jp31GoU1.x1cDHE0lBSWuKGrBuUURw8zNMDlkW86',
                'name' => 'Bryan Bonifasius',
                'email' => 'bryan@gmail.com',
                'nip' => '0987654321',
                'unit' => 'Human Resource',
                'bio' => 'Saya suka makan',
                'role' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'boy',
                'password' => '$2y$12$VBbo3rSQo3iS.Jp31GoU1.x1cDHE0lBSWuKGrBuUURw8zNMDlkW86',
                'name' => 'Ananda Rizky',
                'email' => 'boy@gmail.com',
                'nip' => '1122334455',
                'unit' => 'Finance',
                'bio' => 'Saya suka nonton film',
                'role' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
