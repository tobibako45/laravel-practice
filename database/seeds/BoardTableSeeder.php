<?php

use Illuminate\Database\Seeder;

class BoardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'person_id' => 1,
            'title' => 'たいとるね',
            'message' => 'めっせね',
        ];
        DB::table('boards')->insert($param);

        $param = [
            'person_id' => 2,
            'title' => 'たいとるね2',
            'message' => 'めっせね2',
        ];
        DB::table('boards')->insert($param);

        $param = [
            'person_id' => 3,
            'title' => 'たいとるね3',
            'message' => 'めっせね3',
        ];
        DB::table('boards')->insert($param);
    }
}
