<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = [
            [
                'title' => 'Website Development',
                'slug' => Str::slug('Website Development'),
                'description' => 'Daffana Nusantara.',
                'image' => 'assets/images/portofolio/daffana.png',
                'link' => 'https://daffananusantara.com/',
                'status' => 'published',
            ],
            [
                'title' => 'Cybertrend Kemenku',
                'slug' => Str::slug('Cybertrend Kemenku'),
                'description' => 'UI/UX Development',
                'image' => 'assets/images/portofolio/kemenku.png',
                'link' => 'https://example.com/ecommerce',
                'status' => 'published',
            ]
        ];

        foreach ($portfolios as $portfolio) {
            DB::table('portofolios')->insert([
                'title' => $portfolio['title'],
                'slug' => $portfolio['slug'],
                'description' => $portfolio['description'],
                'image' => $portfolio['image'],
                'link' => $portfolio['link'],
                'status' => $portfolio['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
