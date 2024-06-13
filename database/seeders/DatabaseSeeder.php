<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Material;
use App\Models\Order;
use App\Models\Partner;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create for Admin using UserFactory
        User::create([
            'id' => Str::uuid(),
            'name' => 'Admin',
            'email' => 'Admin@constructify.com',
            'role' => 'admin',
            'phone_number' => '081234567890',
            'password' => bcrypt('admin123'),
        ]);
        
        // Create for User using UserFactory
        User::factory(4)->create();

        $categories = [
            'Material Konstruksi',
            'Material Kayu',
            'Perlengkapan Konstruksi',
            'Bahan Cat',
            'Bahan Atap',
        ];

        foreach ($categories as $categoryName) {
            Category::create([
                'id' => Str::uuid(),
                'name' => $categoryName,
            ]);
        }

        $partners = [
            'Klepon Paint',
            'Panasrisik',
            'Rotan',
            'Pilek Led',
            'Duku',
        ];

        foreach ($partners as $partnerName) {
            Partner::create([
                'id' => Str::uuid(),
                'name' => $partnerName,
            ]);
        }

        $materials = [
            [
                'id' => Str::uuid(),
                'name' => 'Cat Tembok',
                'slug' => 'cat-tembok',
                'ID_Category' => Category::first()->id,
                'ID_Partner' => Partner::first()->id,
                'image' => 'cat tembok.jpg',
                'description' => 'Cat tembok yang bagus untuk rumah anda',
                'price' => 50000,
                'stock' => 100,
                'unit' => 'litre',
            ],
            // [
            //     'id' => $uniqueID[1],
            //     'name' => 'Besi Ulir',
            //     'slug' => 'besi-ulir',
            //     'ID_Category' => Category::first()->id,
            //     'ID_Partner' => Partner::first()->id,
            //     'image' => '../images/besi_ulir.jpeg',
            //     'description' => 'Besi ulir yang kuat dan tahan lama',
            //     'price' => 100000,
            //     'stock' => 50,
            //     'unit' => 'pcs',
            // ],
            // [
            //     'id' => $uniqueID[2],
            //     'name' => 'Kayu',
            //     'slug' => 'kayu',
            //     'ID_Category' => Category::find(2)->id,
            //     'ID_Partner' => Partner::find(2)->id,
            //     'image' => '../images/kayu.jpg',
            //     'description' => 'Kayu jati yang mencari jati diri',
            //     'price' => 200000,
            //     'stock' => 30,
            //     'unit' => 'batang',
            // ],
            // [
            //     'id' => $uniqueID[3],
            //     'name' => 'Palu',
            //     'slug' => 'palu',
            //     'ID_Category' => Category::find(4)->id,
            //     'ID_Partner' => Partner::find(4)->id,
            //     'image' => '../images/palu.jpg',
            //     'description' => 'Palu yang malu',
            //     'price' => 75000,
            //     'stock' => 70,
            //     'unit' => 'pcs',
            // ],
            // [
            //     'id' => $uniqueID[4],
            //     'name' => 'Gergaji',
            //     'slug' => 'gergaji',
            //     'ID_Category' => Category::find(5)->id,
            //     'ID_Partner' => Partner::find(5)->id,
            //     'image' => '../images/gergaji.jpg',
            //     'description' => 'Gergaji yang tajam dan kuat',
            //     'price' => 150000,
            //     'stock' => 20,
            //     'unit' => 'pcs',
            // ],
            ];

        Material::insert($materials);
    }
}
