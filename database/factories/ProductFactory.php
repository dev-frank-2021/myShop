<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //  php artisan tinker
        //  Product::factory()->count(50)->make();

        $no = rand(1000, 5000);
        $price = rand(29.99, 130.99);
        return [
            'productTitle' => $this->faker->words(3, true),
            'productText' => $this->faker->text(500),
            'productNo' => $no,
            'productsDate' => $this->faker->dateTimeBetween('+0 days', '+8 years'),
            'category_id' => 1,
            'price' => $price,
            'discount' => $price * 0.8,
            'images' => json_encode([$no . '_1.jpg', $no . '_2.jpg', $no . '_3.jpg', $no . '_4.jpg']),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
