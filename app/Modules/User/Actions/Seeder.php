<?php
namespace App\Modules\User;

use Illuminate\Database\Seeder as SeedersSeeder;

class Seeder extends SeedersSeeder
{
    /**
     * Run the database seeds.
     */
    static $model = \App\Modules\User\Model::class;
    public function run(): void
    {
        self::$model::truncate();
        self::$model::create([
            "title" => " ",
        ]);
    }
}