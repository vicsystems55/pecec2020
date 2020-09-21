<?php

use Illuminate\Database\Seeder;

class PostCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_categories')->insert([
            [
            'slug' => 'politics',
            'name' => 'politics',
            
            ],

            [
            'slug' => 'business',
            'name' => 'business',
            
            ],

            [
            'slug' => 'health',
            'name' => 'health',
            
            ],

            [
            'slug' => 'design',
            'name' => 'design',
            
            ],

            [
            'slug' => 'sports',
            'name' => 'sports',
            
            ]
        ]);
    }
}
