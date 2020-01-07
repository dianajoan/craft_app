<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category(); 
        $category->name = 'women'; // name must all be lower case just as roles
        $category->type = 'women';
        $category->display_name = 'Women Products';
        $category->description = 'These are women Products';
        $category->save();

        $category = new Category();
        $category->name = 'men';
        $category->type = 'men';
        $category->display_name = 'Men Products';
        $category->description = 'These are men Products';
        $category->save();

        $category = new Category();
        $category->name = 'children';
        $category->type = 'children';
        $category->display_name = 'Children Products';
        $category->description = 'These are children Products';
        $category->save();
    }
}
