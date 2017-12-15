<?php

use Illuminate\Database\Seeder;

use App\SettingType;

class SettingTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SettingType::create([
            'code' => 'size',
            'name_en' => 'Size KH',
            'name_kh' => 'Size KH',
            'note' => 'Create size setting type by seeder'
        ]);
        
        SettingType::create([
            'code' => 'color',
            'name_en' => 'Color',
            'name_kh' => 'Color KH',
            'note' => 'Create color setting type by seeder'
        ]);
        
        SettingType::create([
            'code' => 'weight',
            'name_en' => 'Color',
            'name_kh' => 'Color',
            'name' => 'Weight KH',
            'note' => 'Create weight setting type by seeder'
        ]);
    }
}
