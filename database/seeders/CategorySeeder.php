<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'red',
        ]);
        
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'green',
        ]);
        
        Category::create([
            'name' => 'Data Analyst',
            'slug' => 'data-analyst',
            'color' => 'blue',
        ]);

        Category::create([
            'name' => 'Mobile Development',
            'slug' => 'mobile-development',
            'color' => 'yellow',
        ]);

        Category::create([
            'name' => 'DevOps',
            'slug' => 'devops',
            'color' => 'purple',
        ]);

        Category::create([
            'name' => 'UI/UX Design',
            'slug' => 'ui-ux-design',
            'color' => 'orange',
        ]);

        Category::create([
            'name' => 'Game Development',
            'slug' => 'game-development',
            'color' => 'pink',
        ]);

        Category::create([
            'name' => 'Cloud Computing',
            'slug' => 'cloud-computing',
            'color' => 'teal',
        ]);

        Category::create([
            'name' => 'Digital Marketing',
            'slug' => 'digital-marketing',
            'color' => 'indigo',
        ]);
    }
}
