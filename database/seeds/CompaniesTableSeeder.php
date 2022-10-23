<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


          DB::table('companies')->insert([
              'name' => 'ボクノメイジ',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
         ]);

         DB::table('companies')->insert([
             'name' => '貴島商事',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

        DB::table('companies')->insert([
            'name' => 'プニシロ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
       ]);

    }
}
