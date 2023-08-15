<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Qora',
                'en' => 'Black',
            ]
        ]);
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Oq',
                'en' => 'White',
            ]
        ]);
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Qizil',
                'en' => 'Red',
            ]
        ]);
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Sariq',
                'en' => 'Yellow',
            ]
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'Yog\'och',
                'en' => 'Cotton',
            ]
        ]);
        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'Paxta',
                'en' => 'Linen',
            ]
        ]);
        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'Ipak',
                'en' => 'Silk',
            ]
        ]);
        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'Yun',
                'en' => 'Wool',
            ]
        ]);
    }
}
