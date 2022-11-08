<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::query()->insert(
            [
                [
                    "id" => 1,
                    "name" => "DS Richicken 2 Pcs",
                    "type" => "food",
                    "desc" => "2 potong ayam goreng drum stick yang gurih, disajikan dengan saus keju lezat",
                    "price" => 13000,
                    "image_path" => "https://www.richeesefactory.com/sites/default/media/library/ds-richicken.jpg"
                ],
                [
                    "id" => 2,
                    "name" => "DS Fire Chicken 2 Pcs",
                    "type" => "food",
                    "desc" => "2 potong drum stick dibalur saus BBQ dengan pilihan pedas level 0 s.d 5 yang disajikan dengan saus keju lezat",
                    "price" => 30000,
                    "image_path" => "https://www.richeesefactory.com/sites/default/media/library/ds-fire-chicken.jpg"
                ],
                [
                    "id" => 3,
                    "name" => "Pink Lava",
                    "type" => "drink",
                    "desc" => "Minuman segar dengan perpaduan manisnya susu dan manisnya stroberi",
                    "price" => 10000,
                    "image_path" => "https://www.richeesefactory.com/sites/default/media/library/pink-lava.jpg"
                ],
                [
                    "id" => 4,
                    "name" => "French Fries",
                    "type" => "snack",
                    "desc" => "Kentang goreng renyah khas Richeese Factory, disajikan dengan cheese sauce yang lezat",
                    "price" => "7000",
                    "image_path" => "https://www.richeesefactory.com/sites/default/media/library/french-fries.jpg"
                ]
            ]
        );
    }
}
