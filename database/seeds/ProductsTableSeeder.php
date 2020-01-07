<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'Long Sleeved Jacket';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/CJ9fzDY/product-1.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'Hot';
        $product->save();

        $product = new Product();
        $product->name = 'Demin Men Shirt';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/q0Yc2Zq/product-2.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'Sale';
        $product->save();

        $product = new Product();
        $product->name = 'Mens Working Shoes';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/7JdtZPy/product-3.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'New';
        $product->save();

        $product = new Product();
        $product->name = 'Women Hand Bag';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/VgpMrW4/product-4.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'Hot';
        $product->save();

        $product = new Product();
        $product->name = 'Denim Trouser Women';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/qDmh833/product-5.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'Sale';
        $product->save();

        $product = new Product();
        $product->name = 'Denim Trouser Men';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/dK1rTxm/product-6.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'New';
        $product->save();

        $product = new Product();
        $product->name = 'Hype Grey Shirt';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/PmvRpJX/product-7.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'Hot';
        $product->save();

        $product = new Product();
        $product->name = 'Denim Skirt';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/tY4htfZ/product-8.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'Sale';
        $product->save();

        $product = new Product();
        $product->name = 'Boots for Men';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/Qk8VChW/product-9.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'Hot';
        $product->save();

        $product = new Product();
        $product->name = 'Woolen Sweater Men';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/fps82tJ/product-10.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'Hot';
        $product->save();

        $product = new Product();
        $product->name = 'Hype Dress';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/JCT5sNF/product-11.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'Sale';
        $product->save();

        $product = new Product();
        $product->name = 'Woolen Boots Women';
        $product->description = 'This is an Organic food.';
        $product->imagePath = 'https://i.ibb.co/7nnWgHT/product-12.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'New';
        $product->save();

        $product = new Product();
        $product->name = 'Long Sleeved Jacket';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/RzCvGsH/product-13.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'Hot';
        $product->save();

        $product = new Product();
        $product->name = 'Demin Men Shirt';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/6DLjcTD/product-14.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'Sale';
        $product->save();

        $product = new Product();
        $product->name = 'Mens Working Shoes';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/G7vnpbz/product-15.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'New';
        $product->save();

        $product = new Product();
        $product->name = 'Women Hand Bag';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/HHQ6sWb/product-16.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'Hot';
        $product->save();

        $product = new Product();
        $product->name = 'Denim Trouser Women';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/tDMfB85/product-17.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'Sale';
        $product->save();

        $product = new Product();
        $product->name = 'Denim Trouser Men';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/hDS0r1b/product-18.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'New';
        $product->save();

        $product = new Product();
        $product->name = 'Hype Grey Shirt';
        $product->description = 'This is good for all seasons winter, summer and spring.';
        $product->imagePath = 'https://i.ibb.co/NC3ksK6/product-19.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'Hot';
        $product->save();

    }
}
