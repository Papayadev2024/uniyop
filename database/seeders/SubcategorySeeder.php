<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SubCategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $subcat = ['Audio y Video','Auriculares y Audifonos','Cables','Camaras','Parlantes','Cargadores Multifuncion','Mochilas','Reloj','Cargadores','Protector de reloj','teclados y mouse','camaras web','audifonos gamer','auriculares gamer','pad mouse gamer','microfonos gamer','sillas gamer','Home Escritorio','Home Cocina','Home Baño','Home Deco','Cargadores','Soportes','Otros accesorios de Auto','Audio y Video','Cables','Cargadores de Celular','Cargadores Multifuncion','Cases de Celular','Powerbank','Protector de Celular','Soportes de celular','Otros accesorios de celular','Cases Tablet','Protector Tablet','Soportes Tablet','Otro accesorios de tablet','Audio y Video','Cables','Case de Disco','Case de Laptop','Hubs','LamparaMouse','Mouse Pad','Protector de Laptop','Soportes de Laptop','Soportes y Coolers','Teclados','Otros accesorios de laptop','Accesorios para Ipad / tablets','Cases Tablet','Protector Tablet','Soportes Tablet','Otro accesorios de tablet','Pack dia de la Madre','Pack dia del Padres','Packs Navideños','Otros Packs'];
        $id_categoria = ['7','7','7','7','7','1','1','9','9','9','3','3','3','3','3','3','3','8','8','8','8','2','2','2','4','4','4','4','4','4','4','4','4','6','6','6','6','5','5','5','5','5','5','5','5','5','5','5','5','5','5','5','5','5','10','10','10','10'];

        foreach ($subcat as $key =>$categoryName) {
            SubCategory::create([
                'name' => $subcat[$key],
                'category_id' => $id_categoria[$key],
                'description' => 'Aquí va la descripción de la categoria ' . $subcat[$key],
                'status' => 1,
                'visible' => 1,
            ]);
        }
    }
}
