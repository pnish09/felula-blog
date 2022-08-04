<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'name' => 'Health and fitness',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'slug' => 'health-fitness',
            'created_by' => 1
        ], [
            'name' => 'Food',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'slug' => 'food',
            'created_by' => 1
        ], [
            'name' => 'Travel',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'slug' => 'travel',
            'created_by' => 1
        ], [
            'name' => 'Lifestyle',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'slug' => 'lifestyle',
            'created_by' => 1
        ]];
        Category::insert($data);
    }
}
