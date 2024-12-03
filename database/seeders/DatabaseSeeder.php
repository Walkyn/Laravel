<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto; // Importa el modelo Producto

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamar al seeder de productos
        $this->call(ProductoSeeder::class);
    }
}
