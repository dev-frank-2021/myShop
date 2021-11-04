<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    static $categories = [
        'Herren Sportschuh',
        'Damen Nachthemd',
        'Computer',
        'Bücher',
        'Filme',
        'Musik'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$categories as $category) {
            DB::table('categories')
                ->insert([
                    'category' => $category
                ]);
        }
    }
}
