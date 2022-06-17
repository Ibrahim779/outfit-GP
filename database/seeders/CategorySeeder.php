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
            'name' => 'Formal',
            'parent_id' => null,
        ], [
            'id' => 2,
            'name' => 'Casual',
            'parent_id' => null,
        ], [
            'id' => 3,
            'name' => 'Sport',
            'parent_id' => null,
        ]
        ]);
    }
}
