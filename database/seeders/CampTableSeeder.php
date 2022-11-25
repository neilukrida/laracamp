<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Seeder;
/*ini untuk import model kita*/

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps =
            [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila-balajar',
                'price' => 280,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' => 140,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];
        // foreach ($camps as $key => $camp)
        // {
        //     Camp::create($camp);
        // }
        //atau
        Camp::insert($camps); /*ini untuk memasukkann data ke tabel camps*/
    }
}