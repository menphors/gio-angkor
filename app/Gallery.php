<?php

namespace App;


class Gallery extends CrudModel
{
    public static $validationRules = [
        'gallery_images' => 'mimes:jpeg,bmp,png||max:5000',
    ];
    protected $table = 'tbl_gallery';//table name
    protected $fillable = [
        'promotion_name',
        'gallery_images',
        'gallery_added_date',
        'thumbnail_id',
        'published'
    ];

    public function saveOrUpdate($request)
    {
        //take all request image
        $inputData = $request->except('gallery_images');
        if ($request->hasFile('gallery_images')) {
            $file = $request->file('gallery_images');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path('/uploads');
            $file->move($destinationPath, $fileName);
            $inputData['gallery_images'] = $fileName;
        }

        //dd($inputData);

        return $this->fill($inputData)->save();
    }
}
