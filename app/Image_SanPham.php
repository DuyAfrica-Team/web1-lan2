<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_SanPham extends Model {

	protected $table = 'image__san_phams';

	protected $filltable = ['image', 'sanpham_id'];

	//public $timestamps = false;

	public function sanpham()
	{
		return $this->belongTo('App\SanPham');
	}

}
