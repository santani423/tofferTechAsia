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
                'title' => 'Company Profile Website',
                'slug' => Str::slug('Company Profile Website'),
                'description' => 'Website company profile dengan desain modern dan responsif.',
                'image' => 'images/portfolio/company-profile.jpg',
                'link' => 'https://example.com/company-profile',
                'status' => 'published',
            ],
            [
                'title' => 'E-Commerce Platform',
                'slug' => Str::slug('E-Commerce Platform'),
                'description' => 'Platform belanja online dengan fitur cart dan pembayaran otomatis.',
                'image' => 'images/portfolio/ecommerce.jpg',
                'link' => 'https://example.com/ecommerce',
                'status' => 'published',
            ],
            [
                'title' => 'Landing Page Marketing',
                'slug' => Str::slug('Landing Page Marketing'),
                'description' => 'Landing page untuk kebutuhan kampanye digital marketing.',
                'image' => 'images/portfolio/landing-page.jpg',
                'link' => 'https://example.com/landing-page',
                'status' => 'draft',
            ],
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
