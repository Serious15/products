<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            ['name' => 'キウイ', 'price' => 800, 'description' => '甘みと酸味のバランスが絶妙...', 'season' => '秋,冬'],
            ['name' => 'ストロベリー', 'price' => 1200, 'description' => '完熟いちごを使用...', 'season' => '春'],
            ['name' => 'オレンジ', 'price' => 850, 'description' => 'ネーブルオレンジ使用...', 'season' => '冬'],
            ['name' => 'スイカ', 'price' => 700, 'description' => 'シャリシャリ食感...', 'season' => '夏'],
            ['name' => 'ピーチ', 'price' => 1000, 'description' => 'とろける甘さ...', 'season' => '夏'],
            ['name' => 'シャインマスカット', 'price' => 1400, 'description' => '上品な甘み...', 'season' => '夏,秋'],
            ['name' => 'パイナップル', 'price' => 800, 'description' => 'トロピカルな香り...', 'season' => '春,夏'],
            ['name' => 'ブドウ', 'price' => 1100, 'description' => '巨峰使用...', 'season' => '夏,秋'],
            ['name' => 'バナナ', 'price' => 600, 'description' => '栄養満点...', 'season' => '夏'],
            ['name' => 'メロン', 'price' => 900, 'description' => '香り豊かでジューシー...', 'season' => '春,夏'],
        ]);
    }
}
