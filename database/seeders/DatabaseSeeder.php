<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table(table:'admin')->insert(
            [
                ['name' => 'Admin', 
                 'email' => 'admin@ptpnreg3.com',
                 'password'=>Hash::make('admin'),
                 'role' => 'admin'],
                ['name' => 'Author',
                 'email' => 'author@ptpnreg3.com',
                 'password'=>Hash::make('author'),
                 'role' => 'author']
            ]
            );

            DB::table(table:'users')->insert(
                [
                    ['name' => 'User 1',
                     'email' => 'user1@ptpnreg3.com',
                     'password'=>Hash::make('user'),],
                ]
                );



    }
}
