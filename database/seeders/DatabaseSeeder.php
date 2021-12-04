<?php

namespace Database\Seeders;

use \App\Models\Curso;
use \App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create();
        Curso::factory(50)->create();
    }
}
