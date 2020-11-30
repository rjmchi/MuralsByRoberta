<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Item;

class Fixnames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		$items = Item::get();
		foreach ($items as $item){
			$filename = sprintf("%s_%s.jpg", $item->page->page, $item->name);
			echo $filename;
//			$item->name = $filename;
//			$item->save();
		}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
