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
            'name' => 'Size',
            'note' => 'Create size setting type by seeder'
        ]);
        
        SettingType::create([
            'code' => 'color',
            'name' => 'Color',
            'note' => 'Create color setting type by seeder'
        ]);
        
        SettingType::create([
            'code' => 'weight',
            'name' => 'Color',
            'note' => 'Create weight setting type by seeder'
        ]);
    }
}
