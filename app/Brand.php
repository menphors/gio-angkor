<?php

namespace App;


class Brand extends CrudModel
{
    public static $validationRules = [
        'brand_name' => 'required||max:25',
        'ordering' => 'required||numeric',
        'images_url' => 'required||mimes:jpeg,bmp,png||max:5000',
        'official' => 'required'
    ];
    protected $table = 'tbl_brand';
    protected $fillable = ['id', 'brand_name', 'images_url', 'ordering','official'];

    public function saveOrUpdate($request)
    {
        //take all request image
        $inputData = $request->except('images_url');
        if ($request->hasFile('images_url')) {
            $file = $request->file('images_url');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path('/uploads');
            $file->move($destinationPath, $fileName);
            $inputData['images_url'] = $fileName;
        }
        //dd($inputData);

        return $this->fill($inputData)->save();
    }
    public function promotions() {
        return $this->hasMany('App\Promotion');
    }

    public function products() {
        return $this->hasMany('App\Product');
    }
}
