<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::factory(10)->create();

        //TODO: Create Categories seeder

        DB::table('categories')->insert([
        [
            'id' => 1,
            'name' => 'Men',
            'parent_id' => null,
        ], [
            'id' => 2,
            'name' => 'Formal',
            'parent_id' => 1,
        ], [
            'id' => 3,
            'name' => 'Top',
            'parent_id' => 2,
        ], [
            'id' => 4,
            'name' => 'Bottom',
            'parent_id' => 2,
        ], [
            'id' => 5,
            'name' => 'Shirts',
            'parent_id' => 3,
        ], [
            'id' => 6,
            'name' => 'Formal shirt',
            'parent_id' => 5,
        ], [
            'id' => 7,
            'name' => 'Plain shirt',
            'parent_id' => 5,
        ], [
            'id' => 8,
            'name' => 'White shirt',
            'parent_id' => 5,
        ], [
            'id' => 9,
            'name' => 'Jackets',
            'parent_id' => 3,
        ], [
            'id' => 10,
            'name' => 'Blazer',
            'parent_id' => 9,
        ], [
            'id' => 11,
            'name' => 'Suit Jacket',
            'parent_id' => 9,
        ], [
            'id' => 12,
            'name' => 'Vests',
            'parent_id' => 9,
        ], [
            'id' => 13,
            'name' => 'Trousers',
            'parent_id' => 4,
        ], [
            'id' => 14,
            'name' => 'Classic Trousers',
            'parent_id' => 13,
        ], [
            'id' => 15,
            'name' => 'Suit Trousers',
            'parent_id' => 13,
        ], [
            'id' => 16,
            'name' => 'Casual',
            'parent_id' => 1,
        ], [
            'id' => 17,
            'name' => 'Top',
            'parent_id' => 16,
        ], [
            'id' => 18,
            'name' => 'Shirts',
            'parent_id' => 17,
        ], [
            'id' => 19,
            'name' => 'Plain shirts',
            'parent_id' => 18,
        ], [
            'id' => 20,
            'name' => 'Patterned Shirts',
            'parent_id' => 18,
        ], [
            'id' => 21,
            'name' => 'Oxford Shirts',
            'parent_id' => 18,
        ], [
            'id' => 22,
            'name' => 'Denim shirts',
            'parent_id' => 18,
        ], [
            'id' => 23,
            'name' => 'T-Shirts',
            'parent_id' => 17,
        ], [
            'id' => 24,
            'name' => 'Plain t-shirts',
            'parent_id' => 23,
        ], [
            'id' => 25,
            'name' => 'Patterned t-Shirts',
            'parent_id' => 23,
        ], [
            'id' => 26,
            'name' => 'Polo t-shirts',
            'parent_id' => 23,
        ], [
            'id' => 27,
            'name' => 'Jackets',
            'parent_id' => 17,
        ], [
            'id' => 28,
            'name' => 'Blazer',
            'parent_id' => 27,
        ], [
            'id' => 29,
            'name' => 'Puffer jacket',
            'parent_id' => 27,
        ], [
            'id' => 30,
            'name' => 'Softshel jacket',
            'parent_id' => 27,
        ], [
            'id' => 31,
            'name' => 'Coats',
            'parent_id' => 27,
        ], [
            'id' => 32,
            'name' => 'Sweatshirt',
            'parent_id' => 17,
        ], [
            'id' => 33,
            'name' => 'Hoodies',
            'parent_id' => 32,
        ], [
            'id' => 34,
            'name' => 'Pullover',
            'parent_id' => 32,
        ], [
            'id' => 35,
            'name' => 'Knitwear',
            'parent_id' => 32,
        ], [
            'id' => 36,
            'name' => 'Bottom',
            'parent_id' => 16,
        ], [
            'id' => 37,
            'name' => 'Trousers',
            'parent_id' => 36,
        ], [
            'id' => 38,
            'name' => 'Casual Trouser',
            'parent_id' => 37,
        ], [
            'id' => 39,
            'name' => 'Chinos',
            'parent_id' => 37,
        ], [
            'id' => 40,
            'name' => 'Jogger',
            'parent_id' => 37,
        ], [
            'id' => 41,
            'name' => 'Jeans',
            'parent_id' => 37,
        ], [
            'id' => 42,
            'name' => 'Slim Fit Trousers',
            'parent_id' => 37,
        ], [
            'id' => 43,
            'name' => 'Black Denim',
            'parent_id' => 37,
        ], [
            'id' => 44,
            'name' => 'Dark Washed-blue denim',
            'parent_id' => 37,
        ], [
            'id' => 45,
            'name' => 'Tag Till',
            'parent_id' => 37,
        ], [
            'id' => 46,
            'name' => 'Light Washed-blue denim',
            'parent_id' => 37,
        ], [
            'id' => 47,
            'name' => 'Shorts',
            'parent_id' => 36,
        ], [
            'id' => 48,
            'name' => 'Jogger Shorts',
            'parent_id' => 47,
        ], [
            'id' => 49,
            'name' => 'Jeans Shorts',
            'parent_id' => 47,
        ], [
            'id' => 50,
            'name' => 'Cotton Shorts',
            'parent_id' => 47,
        ], [
            'id' => 51,
            'name' => 'Denim shorts',
            'parent_id' => 47,
        ], [
            'id' => 52,
            'name' => 'Sport',
            'parent_id' => 1,
        ], [
            'id' => 53,
            'name' => 'Top',
            'parent_id' => 52,
        ], [
            'id' => 54,
            'name' => 'T-Shirts',
            'parent_id' => 53,
        ], [
            'id' => 55,
            'name' => 'Polo t-shirts',
            'parent_id' => 54,
        ], [
            'id' => 56,
            'name' => 'Sports t-shirts',
            'parent_id' => 54,
        ], [
            'id' => 57,
            'name' => 'Jackets',
            'parent_id' => 53,
        ], [
            'id' => 58,
            'name' => 'Sports Jacket',
            'parent_id' => 57,
        ], [
            'id' => 59,
            'name' => 'Bottom',
            'parent_id' => 52,
        ], [
            'id' => 60,
            'name' => 'Trousers',
            'parent_id' => 59,
        ], [
            'id' => 61,
            'name' => 'Sport Trousers',
            'parent_id' => 60,
        ], [
            'id' => 62,
            'name' => 'Shorts',
            'parent_id' => 59,
        ], [
            'id' => 63,
            'name' => 'Cotton Shorts',
            'parent_id' => 62,
        ], [
            'id' => 64,
            'name' => 'Sport Shorts',
            'parent_id' => 62,
        ]
        ]);
    }
}
