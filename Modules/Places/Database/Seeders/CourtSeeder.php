<?php

namespace Modules\Places\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Places\Entities\Court;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        Court::truncate();

        $courts = [
            ['name' => 'محكمة رفح '],
            ['name' => 'محكمة خانيونس '],
            ['name' => 'محكمة قصر العدل'],
            ['name' => 'محكمة دير البلح'],
            ['name' => 'محكمة الشمال']

        ];

        foreach ($courts as $key => $value) {

            Court::create($value);
        }
    }
}
