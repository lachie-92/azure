<?php

use App\Category;
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
        $categoryList = [
            'Bone Health' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Bone Health</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/bone_3.jpeg',
            ],
            'Digestion' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Digestion</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/digestive_1.jpg',
            ],
            'Cardiovascular' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Cardiovascular</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/cardiovascular_1.jpg',
            ],
            'Energy' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Energy</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/Energy_1.jpg',
            ],
            'Gastrointestinal Health' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Gastrointestinal Health</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/gastro_2.jpeg',
            ],
            'Immunity' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Immunity</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/immune_3.jpeg',
            ],
            'Inflammation' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Inflammation</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/inflamation_1.jpeg',
            ],
            'Kids' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Kids</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/kids_3.jpeg',
            ],
            'Mens' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Mens</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/mens_1.jpg',
            ],
            'Mitochondrial Function' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Mitochondrial Function</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/mitochondria.jpeg',
            ],
            'Nervous System' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Nervous System</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/nervous_system_1.jpg',
            ],
            'Pregnancy' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Pregnancy</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/pregnancy_1.jpg',
            ],
            'Seniors' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Seniors</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/senior_1.jpeg',
            ],
            'Womens' => [
                'description' =>
                    '
                    <p>
                        The following products may be useful for <strong>Womens</strong>.
                    </p>
                    <p>
                        If you require further information on how Medlab products may be useful for a specific
                        condition please speak with you healthcare professional.
                    </p>
                    ',
                'image_path' => '/img/products/categories/Women_2.jpg',
            ],
        ];

        foreach ($categoryList as $category => $info) {

            Category::create([
                'category_name' => $category,
                'category_description' => $info['description'],
                'image_path' => $info['image_path'],
            ]);
        }
    }
}