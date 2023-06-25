<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class ProductsTableSeeder extends Seeder
{

    public function run(): void
    {
        $categories = Category::all();

        foreach (range(1, 5) as $index) {
            DB::table('products')->insert([
                'name' => 'Product ' . $index,
                'slug' => 'product-' . $index,
                'short_description' => 'Short description of Product ' . $index,
                'description' => 'Description of Product ' . $index,
                'couleur' => 'Color ' . $index,
                'poids' => rand(100, 1000),
                'marque' => 'Brand ' . $index,
                'tva' => 'TVA ' . $index,
                'regular_price' => '10.00',
                'sale_price' => '8.00',
                'SKU' => 'SKU' . $index,
                'stock_status' => 'instock',
                'featured' => false,
                'quantity' => 10,
                'imge' => 'product' . $index . '.jpg',
                'imges' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
