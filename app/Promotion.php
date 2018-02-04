<?php

namespace App;


class Promotion extends CrudModel
{
    public static $validationRules = [
        'promotion_name' => 'required||max:25',
        'promotion_prices' => 'required||numeric',
        'promotion_image' => 'mimes:jpeg,bmp,png||max:5000',
        'discount_percentage' => 'required||numeric',
        'product_id' => 'required||numeric',
        'brand_id' => 'required||numeric',
        'category_id' => 'required||numeric',
        'ordering' => 'required',
        'published' => 'required',
        'promotion_expire_date' => 'nullable|date',
        'date_from' => 'nullable|date',
        'date_to' => 'nullable|date',
    ];
    protected $table = 'tbl_promotion';//table name
    protected $fillable = [
        'promotion_name',
        'promotion_prices',
        'promotion_image',
        'discount_percentage',
        'product_id',
        'brand_id',
        'ordering',
        'category_id',
        'promotion_expire_date',
        'date_from',
        'date_to',
        'published',
        'active'
    ];

    //override CrudModel saveOrUpdate()
    public function saveOrUpdate($request)
    {
        //take all request image
        $inputData = $request->except('promotion_image');
        if ($request->hasFile('promotion_image')) {
            $file = $request->file('promotion_image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path('/uploads');
            $file->move($destinationPath, $fileName);
            $inputData['promotion_image'] = $fileName;
        }

        //dd($inputData);

        return $this->fill($inputData)->save();
    }

}
