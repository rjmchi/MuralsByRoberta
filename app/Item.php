<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable = ['name', 'page_id', 'title', 'description', 'sort_order'];
	
	public function images() {
		return $this->hasMany('App\Image');
	}
	public function page() {
		return $this->belongsTo('App\Page');
	}
}
