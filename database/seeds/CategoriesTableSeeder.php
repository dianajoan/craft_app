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
        $category->name = 'Women';
        $category->type = 'women';
        $category->display_name = 'Women';
        $category->description = 'These are women Products';
        $category->save();

        $category = new Category();
        $category->name = 'Men';
        $category->type = 'men';
        $category->display_name = 'Men';
        $category->description = 'These are men Products';
        $category->save();

        $category = new Category();
        $category->name = 'Children';
        $category->type = 'children';
        $category->display_name = 'Children';
        $category->description = 'These are children Products';
        $category->save();

        

    }
}
