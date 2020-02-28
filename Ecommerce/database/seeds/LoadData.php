<?php

use Illuminate\Database\Seeder;

class LoadData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=8;$i++){
        DB::table('tblimage')->insert([
            'imgID'=>'img'.$i,
            'imgName'=>'img'.$i.'.jpg',
        ]);
        }
    }
}
