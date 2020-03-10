<?php

namespace App\Traits;

trait FilterScopes{
	
    public function scopeFilterCategory($query, $cat_id)
    {
        return $query->whereHas('categories', function ($query) use($cat_id){
            $query->where('id', $cat_id);
        });
    }

    public function scopeFilterDate($query, $from, $to)
    {
        return $query->whereBetween('created_at', [$from, $to]);
    }

    public function scopeFilterName($query, $name){
        return $query->where('name', 'like', '%' . $name . '%');
    }
}