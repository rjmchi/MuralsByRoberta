<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $fillable = ['name', 'page', 'sort_order', 'additional_info'];
	
	public function items() {
		return $this->hasMany('App\Item');
	}
}
