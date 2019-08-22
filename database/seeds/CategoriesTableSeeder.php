<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = ['cat one', 'cat two', 'cat three'];

        foreach ($categories as $category) {

            \App\Category::create([
                'ar' => ['name' => $category],
                'en' => ['name' => $category],
            ]);

        }//end of foreach

    }//end of run

}//end of seeder
