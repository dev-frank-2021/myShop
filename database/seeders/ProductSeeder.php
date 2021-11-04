<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{

    /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker\Factory::create();
        // for ($i = 0; $i <= 3; $i++) {
        //     $no = rand(1000, 5000);
        //     $price = rand(29.99, 130.99);
        //     Product::create([
        //         'productTitle' => 'Neue Schuh Produkt',
        //         'productText' => $this->faker->text(400),
        //         'productNo' => $no,
        //         'productsDate' => $this->faker->dateTimeBetween('+0 days', '+8 years'),
        //         'category_id' => 1,
        //         'price' => $price,
        //         'discount' => $price * 0.8,
        //         'images' => [$no . '_1.jpg', $no . '_2.jpg', $no . '_3.jpg', $no . '_4.jpg'],
        //         'created_at' => $this->faker->dateTime(),
        //         'updated_at' => $this->faker->dateTime(),
        //     ]);
        // }
    }
}
