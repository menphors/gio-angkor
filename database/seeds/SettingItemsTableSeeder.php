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
            'name' => 'XS',
            'value' => 'XS (Xtra Small Size)',
            'note' => 'SettingItem Seeder',
            'type_id' => $size->id
        ]);
        
        SettingItem::create([
            'code' => 's',
            'name' => 'S',
            'value' => 'S (Small Size)',
            'note' => 'SettingItem Seeder',
            'type_id' => $size->id
        ]);
        
        SettingItem::create([
            'code' => 'm',
            'name' => 'M',
            'value' => 'M (Meduim Size)',
            'note' => 'SettingItem Seeder',
            'type_id' => $size->id
        ]);
        
        SettingItem::create([
            'code' => 'l',
            'name' => 'L',
            'value' => 'L (Large Size)',
            'note' => 'SettingItem Seeder',
            'type_id' => $size->id
        ]);
        
        SettingItem::create([
            'code' => 'xl',
            'name' => 'XL',
            'value' => 'XL (Xtra Large Size)',
            'note' => 'SettingItem Seeder',
            'type_id' => $size->id
        ]);
    }
    
    private function fixedColor($color) {
        
        SettingItem::create([
            'code' => 'white',
            'name' => 'White',
            'value' => 'White Color',
            'note' => 'SettingItem Seeder',
            'type_id' => $color->id
        ]);
        
        SettingItem::create([
            'code' => 'black',
            'name' => 'Black',
            'value' => 'Black Color',
            'note' => 'SettingItem Seeder',
            'type_id' => $color->id
        ]);
        
    }
    
    private function fixedWeight($weight) {
        
        SettingItem::create([
            'code' => '100g',
            'name' => '100 G',
            'value' => '100g (Gram)',
            'note' => 'SettingItem Seeder',
            'type_id' => $weight->id
        ]);
        
        SettingItem::create([
            'code' => '1kg',
            'name' => '10 Kg',
            'value' => '10kg (Kilogram)',
            'note' => 'SettingItem Seeder',
            'type_id' => $weight->id
        ]);
        
        SettingItem::create([
            'code' => '10kg',
            'name' => '10 Kg',
            'value' => '10 Kg (Kilogram)',
            'note' => 'SettingItem Seeder',
            'type_id' => $weight->id
        ]);
        
    }
    
}
