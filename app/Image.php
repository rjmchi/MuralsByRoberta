<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	protected $fillable = ['item_id', 'name', 'width','height', 'next_image', 'prev_image', 'sort_order'];
	
	public function item() {
		return belongsTo('App\Item');
	}
}
