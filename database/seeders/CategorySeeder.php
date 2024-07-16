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
        $cat = ['Accesorios', 'Tablet', 'Celulares'];
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
