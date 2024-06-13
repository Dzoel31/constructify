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
    }
}
