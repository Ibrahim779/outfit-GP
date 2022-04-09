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
        //Men Clothes
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

        //Women Clothes
        DB::table('categories')->insert([
            [
                'id' => 65,
                'name' => 'Women',
                'parent_id' => null,
                ],[
            'id' => 66,
            'name' => 'Formal',
            'parent_id' => 65,
            ],
            [
            'id' => 67,
            'name' => 'Suits',
            'parent_id' => 66,
            ],
            [
            'id' => 68,
            'name' => 'Pants Suit',
            'parent_id' => 67,
            ],
            [
            'id' => 69,
            'name' => 'Skirts Suit',
            'parent_id' => 67,
            ],
        
            [
            'id' => 70,
            'name' => 'Top',
            'parent_id' => 66,
            ], [
            'id' => 71,
            'name' => 'Pants',
            'parent_id' => 66,
            ], 
            [
            'id' => 72,
            'name' => 'Skirts',
            'parent_id' => 66,
            ],[
            'id' => 73,
            'name' => 'Blazer',
            'parent_id' => 70,
            ], [
            'id' => 74,
            'name' => 'Cutaway',
            'parent_id' => 70,
            ], [
            'id' => 75,
            'name' => 'Peplum',
            'parent_id' => 70,
            ], [
            'id' => 76,
            'name' => 'Leather',
            'parent_id' => 70,
            ], [
            'id' => 77,
            'name' => 'Cropped',
            'parent_id' => 70,
            ], [
            'id' => 78,
            'name' => 'Wrap',
            'parent_id' => 70,
            ], [
            'id' => 79,
            'name' => 'Blouse',
            'parent_id' => 70,
            ], [
            'id' => 80,
            'name' => 'Coats',
            'parent_id' => 70,
            ], [
            'id' => 81,
            'name' => 'Fitted Shirt',
            'parent_id' => 70,
            ], [
            'id' => 82,
            'name' => 'Corset',
            'parent_id' => 70,
            ], [
            'id' => 83,
            'name' => 'Jabot',
            'parent_id' => 70,
            ],
            [
            'id' => 84,
            'name' => 'Formal',
            'parent_id' => 71,
            ], [
            'id' => 85,
            'name' => 'Sailor',
            'parent_id' => 71,
            ],
            [
            'id' => 86,
            'name' => 'Skinny',
            'parent_id' => 71,
            ], [
            'id' => 87,
            'name' => 'Flared',
            'parent_id' => 71,
            ], [
            'id' => 88,
            'name' => 'Straight',
            'parent_id' => 71,
            ], [
            'id' => 89,
            'name' => 'Wide Leg',
            'parent_id' => 71,
            ], [
            'id' => 90,
            'name' => 'Formal',
            'parent_id' => 71,
            ], [
            'id' => 91,
            'name' => 'Sailor',
            'parent_id' => 71,
            ], [
            'id' => 92,
            'name' => 'Pleated',
            'parent_id' => 72,
            ], [
            'id' => 93,
            'name' => 'Pagged',
            'parent_id' => 72,
            ], [
            'id' => 94,
            'name' => 'Circle',
            'parent_id' => 72,
            ], [
            'id' => 95,
            'name' => 'Tube',
            'parent_id' => 72,
            ], [
            'id' => 96,
            'name' => 'Pencil',
            'parent_id' => 72,
            ], [
            'id' => 97,
            'name' => 'Sheath',
            'parent_id' => 72,
            ], [
            'id' => 98,
            'name' => 'Buttoned',
            'parent_id' => 72,
            ], [
            'id' => 99,
            'name' => 'Slit',
            'parent_id' => 72,
            ], [
            'id' => 100,
            'name' => 'Box Pleated',
            'parent_id' => 72,
            ],
            [
            'id' => 101,
            'name' => 'Casual',
            'parent_id' => 65,
            ],
            [
            'id' => 102,
            'name' => 'JumpSuits',
            'parent_id' => 101,
            ],
            [
            'id' => 103,
            'name' => 'Top',
            'parent_id' => 101,
            ],
            [
            'id' => 104,
            'name' => 'Jens',
            'parent_id' => 101,
            ],
            [
            'id' => 105,
            'name' => 'Skirts',
            'parent_id' => 101,
            ],
            [
            'id' => 106,
            'name' => 'Dresses',
            'parent_id' => 101,
            ],
            [
            'id' => 107,
            'name' => 'Tshirt',
            'parent_id' => 103,
            ], [
            'id' => 108,
            'name' => 'Tank Top',
            'parent_id' => 103,
            ], [
            'id' => 109,
            'name' => 'Sweatshirt',
            'parent_id' => 103,
            ], [
            'id' => 110,
            'name' => 'Leather',
            'parent_id' => 103,
            ], [
            'id' => 111,
            'name' => 'WaterFall',
            'parent_id' => 103,
            ], [
            'id' => 112,
            'name' => 'Fitted Wrap',
            'parent_id' => 103,
            ], [
            'id' => 113,
            'name' => 'Blouse',
            'parent_id' => 103,
            ], [
            'id' => 114,
            'name' => 'Chanel',
            'parent_id' => 103,
            ], [
            'id' => 115,
            'name' => 'Polo Shirts',
            'parent_id' => 103,
            ], [
            'id' => 116,
            'name' => 'Tube Top',
            'parent_id' => 103,
            ], [
            'id' => 117,
            'name' => 'Hodie',
            'parent_id' => 103,
            ],[
            'id' => 118,
            'name' => 'Bolero',
            'parent_id' => 103,
            ], [
            'id' => 119,
            'name' => 'Bloussen',
            'parent_id' => 103,
            ],
            [
            'id' => 120,
            'name' => 'Skinny',
            'parent_id' => 104,
            ], [
            'id' => 121,
            'name' => 'Paggy',
            'parent_id' => 104,
            ], [
            'id' => 122,
            'name' => 'Boyfriend',
            'parent_id' => 104,
            ], [
            'id' => 123,
            'name' => 'Flared',
            'parent_id' => 104,
            ], [
            'id' => 125,
            'name' => 'Straight',
            'parent_id' => 104,
            ], [
            'id' => 126,
            'name' => 'Wide Leg',
            'parent_id' => 104,
            ], [
            'id' => 127,
            'name' => 'Boot-cut',
            'parent_id' => 104,
            ], [
            'id' => 128,
            'name' => 'Handkerchief',
            'parent_id' => 105,
            ], [
            'id' => 129,
            'name' => 'Pleated',
            'parent_id' => 105,
            ], [
            'id' => 130,
            'name' => 'Pagged',
            'parent_id' => 105,
                ], [
            'id' => 131,
            'name' => 'Circle',
            'parent_id' => 105,
            ], [
            'id' => 132,
            'name' => 'Pant-Skirt',
            'parent_id' => 105,
            ], [
            'id' => 133,
            'name' => 'Pareo',
            'parent_id' => 105,
            ], [
            'id' => 134,
            'name' => 'Tulle Skirt',
            'parent_id' => 105,
            ],
            [
            'id' => 135,
            'name' => 'Shift',
            'parent_id' => 106,
            ], [
            'id' => 136,
            'name' => 'Apron',
            'parent_id' => 106,
            ], [
            'id' => 137,
            'name' => 'Ship',
            'parent_id' => 106,
                ], [
            'id' => 138,
            'name' => 'Yoke',
            'parent_id' => 106,
            ], [
            'id' => 139,
            'name' => 'Shirt',
            'parent_id' => 106,
            ], [
            'id' => 140,
            'name' => 'Tunic',
            'parent_id' => 106,
            ], [
            'id' => 141,
            'name' => 'Long Sleeved',
            'parent_id' => 106,
            ],
            [
            'id' => 142,
            'name' => 'High Waist',
            'parent_id' => 106,
            ], [
            'id' => 143,
            'name' => 'Domain',
            'parent_id' => 106,
            ],
            [
            'id' => 144,
            'name' => 'Evening Dresses',
            'parent_id' => 65,
            ],[
            'id' => 145,
            'name' => 'Ball Gawn',
            'parent_id' => 144,
            ], [
            'id' => 146,
            'name' => 'Bouffant',
            'parent_id' => 144,
            ], [
            'id' => 147,
            'name' => 'Sweet Heart',
            'parent_id' => 144,
            ], [
            'id' => 148,
            'name' => 'Pouf',
            'parent_id' => 144,
            ], [
            'id' => 149,
            'name' => 'Fit and Flare',
            'parent_id' => 144,
            ], [
            'id' => 150,
            'name' => 'Wrap',
            'parent_id' => 144,
            ], [
            'id' => 151,
            'name' => 'One Shoulder',
            'parent_id' => 144,
            ], [
            'id' => 152,
            'name' => 'Bodycon',
            'parent_id' => 144,
            ], [
            'id' => 153,
            'name' => 'Paneled Waist',
            'parent_id' => 144,
            ], [
            'id' => 154,
            'name' => 'Sun Dress',
            'parent_id' => 144,
            ], [
            'id' => 155,
            'name' => 'Strapless',
            'parent_id' => 144,
            ],[
            'id' => 156,
            'name' => 'Bias',
            'parent_id' => 144,
            ], [
            'id' => 157,
            'name' => 'Cut Out',
            'parent_id' => 144,
            ],
            [
            'id' => 158,
            'name' => 'Sport',
            'parent_id' => 65,
            ], [
            'id' => 159,
            'name' => 'Top',
            'parent_id' => 158,
            ], [
            'id' => 160,
            'name' => 'T-Shirts',
            'parent_id' => 159,
            ], [
            'id' => 161,
            'name' => 'Polo t-shirts',
            'parent_id' => 160,
            ], [
            'id' => 162,
            'name' => 'Sports t-shirts',
            'parent_id' => 160,
            ], [
            'id' => 163,
            'name' => 'Jackets',
            'parent_id' => 159,
            ], [
            'id' => 164,
            'name' => 'Sports Jacket',
            'parent_id' => 163,
            ], [
            'id' => 165,
            'name' => 'Bottom',
            'parent_id' => 158,
            ], [
            'id' => 166,
            'name' => 'Trousers',
            'parent_id' => 165,
            ], [
            'id' => 167,
            'name' => 'Sport Trousers',
            'parent_id' => 166,
            ], [
            'id' => 168,
            'name' => 'Shorts',
            'parent_id' => 165,
            ], [
            'id' => 169,
            'name' => 'Cotton Shorts',
            'parent_id' => 168,
            ], [
            'id' => 170,
            'name' => 'Sport Shorts',
            'parent_id' => 168,
            ]
        ]);
    }
}
