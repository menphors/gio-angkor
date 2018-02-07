<?php

namespace App;



class Category extends CrudModel
{
    protected $table = 'tbl_category';
    protected $fillable = [
        'name',
        'parent_id',
        'ordering',
        'published'
    ];
    // generate function access
    public function parent() {
        return $this->belongsTo('App\Category','parent_id');
    }

    public function children() {
        return $this->hasMany('App\Category','parent_id');
    }

    // App\Category::allParents()->get()
    public function scopeAllParents($query) {
        return $query->where('parent_id','<=',0);
    }

    // App\Category::allChildren()->get()
    public function scopeAllChildren($query) {
        return $query->where('parent_id','>',0);
    }
}
