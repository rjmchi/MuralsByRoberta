<?php

use Illuminate\Database\Seeder;

class convert extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$old_pages = DB::connection('mysql')->table('page')->get();
	
		foreach ($old_pages as $page) {
			DB::connection('sqlite')->table('pages')->insert([
				'id' => $page->id,
				'name' => $page->name,
				'page' =>$page->page,
				'sort_order' => $page->sort_order,
				'additional_info' =>$page->additional_info,
				'created_at' => \Carbon\Carbon::now(),
				'updated_at' => \Carbon\Carbon::now()				
			]);
		}	
		echo 'pages complete - ';	
		
		$old_items = DB::connection('mysql')->table('item')->get();
	
		foreach ($old_items as $item) {
			DB::connection('sqlite')->table('items')->insert([
				'id' => $item->id,
				'name' => $item->name,
				'page_id' =>$item->page,
				'title' => $item->title,
				'sort_order' => $item->sort_order,
				'description' =>$item->description,
				'created_at' => \Carbon\Carbon::now(),
				'updated_at' => \Carbon\Carbon::now()				
			]);
		}	
		echo 'items complete - ';	
		
		$old_images = DB::connection('mysql')->table('image')->get();		
		
		foreach ($old_images as $image) {
			DB::connection('sqlite')->table('images')->insert([
				'id' => $image->id,
				'item_id' => $image->item,
				'name' => $image->name,
				'width' =>$image->width,
				'height' => $image->height,
				'sort_order' => $image->sort_order,
				'next_image' =>$image->next_image,
				'prev_image' => $image->prev_image,
				'created_at' => \Carbon\Carbon::now(),
				'updated_at' => \Carbon\Carbon::now()				
			]);
		}	
		echo 'items complete - ';		
    }
}