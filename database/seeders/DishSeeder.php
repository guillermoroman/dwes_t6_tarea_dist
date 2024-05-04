<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Dish;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = [
            [
                'name' => 'Hamburguesa con queso',
                'description' => 'Deliciosa hamburguesa con queso, lechuga, tomate y salsa especial',
                'price' => 9.99,
            ],
            [
                'name' => 'Pizza Margarita',
                'description' => 'Clásica pizza con salsa de tomate, mozzarella y albahaca',
                'price' => 12.50,
            ],
            [
                'name' => 'Ensalada César',
                'description' => 'Ensalada fresca con pollo a la parrilla, lechuga romana, crutones y aderezo César',
                'price' => 8.75,
            ],
            [
                'name' => 'Sushi variado',
                'description' => 'Surtido de sushi con nigiri, maki y sashimi',
                'price' => 15.99,
            ],
            [
                'name' => 'Pasta Alfredo',
                'description' => 'Pasta con salsa Alfredo cremosa y pollo a la parrilla',
                'price' => 11.25,
            ],
        ];

        foreach ($dishes as $dish) {
            Dish::create($dish);
        }
    }
}
