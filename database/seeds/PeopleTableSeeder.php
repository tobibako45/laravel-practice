<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'name' => 'shogo',
          'mail' => 'shogo@example.com',
          'age' => 37,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'chika',
            'mail' => 'chika@example.com',
            'age' => 28,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'ikki',
            'mail' => 'ikki@example.com',
            'age' => 7,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'ria',
            'mail' => 'ria@example.com',
            'age' => 5,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'dare1',
            'mail' => 'dare1@example.com',
            'age' => 55,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'dare2',
            'mail' => 'dare2@example.com',
            'age' => 20,
        ];
        DB::table('people')->insert($param);

    }
}
