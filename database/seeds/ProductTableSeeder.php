<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://media.istockphoto.com/photos/pills-and-capsules-in-medical-vial-picture-id521624342?k=6&m=521624342&s=612x612&w=0&h=tGBbJv5jIhy9XuXuyztj6scetSS-gf39lHaPpKInJJQ=', 
            'title' => 'Medicine 1', 
            'description' => 'It works!', 
            'price' => 10,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://cdn.24.co.za/files/Cms/General/d/3594/9bc02ace1a014a5caa0807c60f5338cf.jpg', 
            'title' => 'Medicine 2', 
            'description' => 'This works too!', 
            'price' => 20,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images.pexels.com/photos/415825/pexels-photo-415825.jpeg?auto=compress&cs=tinysrgb&h=350', 
            'title' => 'Medicine 3', 
            'description' => 'This one as well!', 
            'price' => 30,
        ]);
        $product->save();
    }
}
