<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      //vendorFactoryクラスで定義した内容に基づきダミーデータを6つ生成する
      vendor::factory()->count(6)->create();
    }
}
