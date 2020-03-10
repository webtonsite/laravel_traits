<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Multitentable{
	public static function bootMultitentable(){
		$role_admin = 1; //superadmin
		static::creating(function($model){
			$model->user_id = auth()->id();
		});
		if(auth()->check() && auth()->user()->role_id != $role_admin){
			static::addGlobalScope('user_id', function(Builder $builder){
				return $builder->where('user_id', auth()->id());
			});
		}
	}
}