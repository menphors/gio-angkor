<?php

use Illuminate\Database\Seeder;

use App\SettingType;
use App\SettingItem;

class SettingItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $size = SettingType::whereCode('size')->first();
        $color = SettingType::whereCode('color')->first();
        $weight = SettingType::whereCode('weight')->first();
        
        if ($size) {
            $this->fixedSize($size);
        }
        
        if ($color) {
            $this->fixedColor($color);
        }
        
        if ($weight) {
            $this->fixedWeight($weight);
        }
    }
    
    private function fixedSize($size) {
        
        SettingItem::create([
            'code' => 'xs',
            'name' => 'XS kh',
            'value' => 'XS (Xtra Small Size)',
            'note' => 'SettingItem Seeder',
            'type_id' => $size->id
        ]);
        
        SettingItem::create([
            'code' => 's',
            'name_en' => 'S',
            'name_kh' => 'S kh',
            'value' => 'S (Small Size)',
            'note' => 'SettingItem Seeder',
            'type_id' => $size->id
        ]);
        
        SettingItem::create([
            'code' => 'm',
            'name_en' => 'M',
            'name_kh' => 'M kh',
            'value' => 'M (Meduim Size)',
            'note' => 'SettingItem Seeder',
            'type_id' => $size->id
        ]);
        
        SettingItem::create([
            'code' => 'l',
            'name_en' => 'L',
            'name_kh' => 'L kh',
            'value' => 'L (Large Size)',
            'note' => 'SettingItem Seeder',
            'type_id' => $size->id
        ]);
        
        SettingItem::create([
            'code' => 'xl',
            'name_en' => 'XL',
            'name_kh' => 'XL kh',
            'value' => 'XL (Xtra Large Size)',
            'note' => 'SettingItem Seeder',
            'type_id' => $size->id
        ]);
    }
    
    private function fixedColor($color) {
        
        SettingItem::create([
            'code' => 'white',
            'name_en' => 'White',
            'name_kh' => 'White kh',
            'value' => 'White Color',
            'note' => 'SettingItem Seeder',
            'type_id' => $color->id
        ]);
        
        SettingItem::create([
            'code' => 'black',
            'name_en' => 'Black',
            'name_kh' => 'Black kh',
            'value' => 'Black Color',
            'note' => 'SettingItem Seeder',
            'type_id' => $color->id
        ]);
        
    }
    
    private function fixedWeight($weight) {
        
        SettingItem::create([
            'code' => '100g',
            'name_en' => '100 G',
            'name_kh' => '100 G kh',
            'value' => '100g (Gram)',
            'note' => 'SettingItem Seeder',
            'type_id' => $weight->id
        ]);
        
        SettingItem::create([
            'code' => '1kg',
            'name_en' => '10 Kg',
            'name_kh' => '10 Kg kh',
            'value' => '10kg (Kilogram)',
            'note' => 'SettingItem Seeder',
            'type_id' => $weight->id
        ]);
        
        SettingItem::create([
            'code' => '10kg',
            'name_en' => '10 Kg',
            'name_kh' => '10 Kg kh',
            'value' => '10 Kg (Kilogram)',
            'note' => 'SettingItem Seeder',
            'type_id' => $weight->id
        ]);
        
    }
    
}
