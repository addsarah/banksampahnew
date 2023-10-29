<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // buat objek user
        $user = new \App\Models\User;
        $user->name="shoto";
        $user->username="halfhot";
        $user->email="shoto@gmail.com";
        $user->password = Hash::make('1234567');
        $user->level="admin";
        $user->save();
        $this->command->info("User telah dibuat");

        $user = new \App\Models\User;
        $user->name="kousuke";
        $user->username="kou";
        $user->email="kousuke@gmail.com";
        $user->password = Hash::make('1234567');
        $user->level="staff";
        $user->save();
        $this->command->info("User telah dibuat");

        $user = new \App\Models\User;
        $user->name="kento";
        $user->username="miyaken";
        $user->email="miyaken@gmail.com";
        $user->password = Hash::make('1234567');
        $user->level="staff";
        $user->save();
        $this->command->info("User telah dibuat");

    }
}
