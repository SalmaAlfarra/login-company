<?php

namespace Modules\Places\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Places\Entities\City;

class CitySeeder extends Seeder
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

        City::truncate();

        $cities = [
            ['name' => 'رفح'],
            ['name' => 'خانيونس'],
            ['name' => 'دير البلح'],
            ['name' => 'المصدر'],
            ['name' => 'النصيرات'],
            ['name' => 'البريج'],
            ['name' => 'الزوايدة'],
            ['name' => 'المغازي'],
            ['name' => 'وادي السلقا'],
            ['name' => 'وادي غزة'],
            ['name' => 'الزهراء '],
            ['name' => 'غزة'],
            ['name' => 'بيت لاهيا'],
            ['name' => 'جباليا'],
            ['name' => 'حي الزيتون'],
            ['name' => 'حي التفاح'],
            ['name' => 'بيت حانون'],

        ];

        foreach ($cities as $key => $value) {

            City::create($value);
        }
    }
}
