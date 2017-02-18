<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model {

	protected $table = 'danhmucs';

	protected $filltable = ['name', 'alias','order', 'parent_id', 'keywords', 'description'];

	//public $timestamps = false;

	public function sanpham()
	{
		return $this->hasMany('App\SanPham');
	}

}
