<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Portfolio Website',
                'description' => 'A modern portfolio built with Laravel and TailwindCSS.',
                'live_link' => 'https://your-live-link.com',
                'github_link' => 'https://github.com/yourname/portfolio',
            ],
            [
                'title' => 'E-commerce App',
                'description' => 'Full-stack e-commerce system with cart, checkout, and admin panel.',
                'live_link' => null,
                'github_link' => 'https://github.com/yourname/ecommerce',
            ],
            [
                'title' => 'Blog Platform',
                'description' => 'Multi-user blog with authentication and CRUD posts.',
                'live_link' => null,
                'github_link' => 'https://github.com/yourname/blog',
            ],
        ];

        foreach ($projects as $p) {
            Project::create([
                'title' => $p['title'],
                'slug' => Str::slug($p['title']),
                'description' => $p['description'],
                'image' => null,
                'live_link' => $p['live_link'],
                'github_link' => $p['github_link'],
            ]);
        }
    }
}
