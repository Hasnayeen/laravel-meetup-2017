<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Cover',
                'serial' => 1
            ],
            [
                'title' => 'What is Testing',
                'serial' => 2
            ],
        ];
        DB::table('pages')->insert($data);
    }
}
