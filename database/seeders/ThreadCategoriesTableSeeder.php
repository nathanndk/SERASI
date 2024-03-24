<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreadCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thread_categories')->delete();

        DB::statement('ALTER TABLE thread_categories AUTO_INCREMENT = 1');

        DB::table('thread_categories')->insert([
            ['category' => 'Life'],
            ['category' => 'Sports'],
            ['category' => 'Food'],
            ['category' => 'Programming'],
            ['category' => 'Flight Information'],
            ['category' => 'Airport Facilities'],
            ['category' => 'Security'],
            ['category' => 'Airlines'],
            ['category' => 'Others'],
        ]);
    }
}
