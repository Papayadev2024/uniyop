<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Maatwebsite\Excel\Facades\Excel;
use App\Models\Products;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;


class ProductSeeder extends Seeder
{
    use Importable;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new class implements ToModel
        {
            public function model(array $row)
            {
                if (!is_numeric($row[0])) return null;
                Products::updateOrCreate([
                    'sku' => $row[5]
                ],[
                    'categoria_id' => $row[1],
                    'subcategory_id' => $row[3],
                    'sku'=> $row[5],
                    'producto' => $row[6],
                    'color' => $row[7],
                    'description' => $row[8],
                    'stock' => $row[9] ?? 0,
                    'precio' => $row[10] ?? 0,
                    'descuento' => $row[11] ?? 0,
                    'imagen' => $row[12]
                ]);
            }
        }, 'storage/app/utils/Products.xlsx');
    }
}
