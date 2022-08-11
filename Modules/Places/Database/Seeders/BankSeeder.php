<?php

namespace Modules\Places\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Places\Entities\Bank;

class BankSeeder extends Seeder
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
        Bank::truncate();

        $banks = [
            ['name' => 'بنك فلسطين'],
            ['name' => 'بنك القدس '],
            ['name' => 'بنك الأردن '],
            ['name' => 'بنك الإنتاج'],
            ['name' => 'بنك الإسكان'],
            ['name' => 'البنك الإسلامي الفلسطيني'],
            ['name' => 'البنك العربي'],
            ['name' => 'النك الوطني الإسلامي'],
            ['name' => 'البنك العقاري المصري العربي'],
            ['name' => 'بنك الاستثمار'],
            ['name' => 'البريد'],
            ['name' => 'هيئة التأمين و المعاشات'],
            ['name' => 'شركة زياد مرتجى'],

        ];

        foreach ($banks as $key => $value) {

            Bank::create($value);
        }
    }
}
