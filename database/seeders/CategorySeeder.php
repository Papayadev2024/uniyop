<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cat = ['Accesorios de Oficina','Accesorios para Auto','Accesorios Gamer','Accesorios para celular','Accesorios para Laptop','Accesorios para Ipad / tablets','Accesorios Audio y Video','Accesorios Home','Accesorios de Reloj','Packs'];

        foreach ($cat as $categoryName) {
            Category::create([
                'name' => $categoryName,
                'description' => 'Aquí va la descripción de la categoria ' . $categoryName,
                'status' => 1,
                'visible' => 1,
            ]);
        }
    }
}
