<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $nombresMedicamentos = [
            'Aspirina', 'Ibuprofeno', 'Paracetamol', 'Amoxicilina', 'Diclofenaco', 
            'Loratadina', 'Omeprazol', 'Clorfenamina', 'Cefalexina', 'Metformina', 
            'Enalapril', 'Losartán', 'Tramadol', 'Omeprazol', 'Furosemida', 
            'Levotiroxina', 'Clindamicina', 'Azitromicina', 'Salbutamol', 'Acetaminofén'
        ];

        $faker = Faker::create();

        for ($i = 0; $i < 40; $i++) {
            Producto::create([
                'codigo' => 'MED-' . str_pad($i + 1, 5, '0', STR_PAD_LEFT),
                'producto' => $nombresMedicamentos[array_rand($nombresMedicamentos)],
                'descripcion' => $faker->sentence,
                'precio_costo' => $faker->randomFloat(2, 10, 50),
                'precio_venta' => $faker->randomFloat(2, 60, 150),
                'stock' => $faker->numberBetween(10, 100),
            ]);
        }
    }
}
