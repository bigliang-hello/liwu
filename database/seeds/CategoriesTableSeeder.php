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
        $categories = [
            [
                'name'        => '送老婆',
                'image'       => 'storage/images/2018081116435976.png',
                'description' => '送老婆',
            ],
            [
                'name'        => '送父母',
                'image'       => 'storage/images/2018081116435976.png',
                'description' => '送父母',
            ],
            [
                'name'        => '送领导',
                'image'       => 'storage/images/2018081116435976.png',
                'description' => '送领导',
            ],
            [
                'name'        => '送闺蜜',
                'image'       => 'storage/images/2018081116435976.png',
                'description' => '送闺蜜',
            ],
            [
                'name'        => '送同事',
                'image'       => 'storage/images/2018081116435976.png',
                'description' => '送闺蜜',
            ],
            [
                'name'        => '送小孩',
                'image'       => 'storage/images/2018081116435976.png',
                'description' => '送闺蜜',
            ],
            [
                'name'        => '送长辈',
                'image'       => 'storage/images/2018081116435976.png',
                'description' => '送闺蜜',
            ],
        ];

        \Illuminate\Support\Facades\DB::table('categories')->insert($categories);
    }
}
