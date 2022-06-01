<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryCarteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category=new \App\Models\CategoryCarte();
        $category->name='CIB classique';
        $category->is_online=1;
        $category->save();

        $category2=new \App\Models\CategoryCarte();
        $category2->name='Gold';
        $category2->is_online=1;
        $category2->save();

        $category3=new \App\Models\CategoryCarte();
        $category3->name='Corporate';
        $category3->is_online=1;
        $category3->save();
    }
}
