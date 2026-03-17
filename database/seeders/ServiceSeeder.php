<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::create([
            'name' => 'Web Design',
            'description' => 'Jasa desain website modern',
            'price' => 500000,
            'category' => 'Design'
        ]);

        Service::create([
            'name' => 'SEO Optimization',
            'description' => 'Optimasi website agar ranking Google',
            'price' => 300000,
            'category' => 'Marketing'
        ]);

        Service::create([
            'name' => 'Landing Page',
            'description' => 'Pembuatan landing page untuk bisnis',
            'price' => 400000,
            'category' => 'Development'
        ]);

        Service::create([
            'name' => 'UI/UX Audit',
            'description' => 'Analisis user experience aplikasi',
            'price' => 350000,
            'category' => 'Design'
        ]);

        Service::create([
            'name' => 'Social Media Ads',
            'description' => 'Manajemen iklan Facebook & Instagram',
            'price' => 600000,
            'category' => 'Marketing'
        ]);
    }
}