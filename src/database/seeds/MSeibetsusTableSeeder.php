<?php

use Illuminate\Database\Seeder;
use App\MSeibetsu;

class MSeibetsusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_seibetsu')->truncate();

        for ($i=1; $i<3; $i++) {
            if ($i == 1) {
                $na = '男';
            } else {
                $na = '女';
            }
            $param = [
                'seibetsu_id' => $i,
                'name' => $na,
                'created_at' => now()
            ];
            MSeibetsu::create($param);
        }
    }
}
