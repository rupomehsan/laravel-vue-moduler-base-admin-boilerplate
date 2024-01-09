<?php

namespace App\Modules\User;

use Illuminate\Database\Seeder as SeedersSeeder;
use Illuminate\Support\Facades\Hash;

class Seeder extends SeedersSeeder
{
    /**
        php artisan db:seed --class="App\Modules\User\Seeder"
     * Run the database seeds.
     */
    static $model = \App\Modules\User\Model::class;
    public function run(): void
    {
        self::$model::truncate();
        self::$model::create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make('11111111'),
        ]);
    }
}
