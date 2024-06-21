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
            'address' => 'Jl. Admin No. 1',
            'password' => bcrypt('admin123'),
        ]);
        
        // Create for User using UserFactory
        User::create([
            'id' => Str::uuid(),
            'name' => 'Customer',
            'email' => 'Customer@constructify.com',
            'role' => 'customer',
            'phone_number' => '081234567891',
            'address' => 'Jl. Customer No. 2',
            'password' => bcrypt('customer123'),
        ]);

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
            ];

        Material::insert($materials);
    }
}
