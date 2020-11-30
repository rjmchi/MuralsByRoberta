<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Item;
use App\Page;

class adminController extends Controller
{
	private $pages;
	public function __construct() {
		$this->pages = Page::orderBy('sort_order')->get();
	}
	public function index() {
		$data['pages'] = $this->pages;
		$data['currentPage'] = $data['pages'][0];
		$data['items'] = Item::where('page_id', '=', $data['currentPage']->id)->orderBy('sort_order', 'DESC')->get();
		return view('list')->with($data);
	}
	
	public function listItems($page) {
		$data['pages'] = $this->pages;
		$data['currentPage'] = Page::where('page', '=', $page)->get()->first();
		$data['items'] = Item::where('page_id', '=', $data['currentPage']->id)->orderBy('sort_order', 'DESC')->get();
		
		return view('list')->with($data);
	}
	public function addItem($page) {
		$data['pages'] = $this->pages;
		$data['currentPage'] = Page::where('page', '=', $page)->get()->first();
		$item = Item::where('page_id', '=', $data['currentPage']->id)->orderBy('sort_order', 'DESC')->take(1)->first();
		$data['sort_order'] = $item->sort_order + 1;
			
		return view('additem')->with($data);
	}
	public function saveItem(Request $request) {
		$this->validate($request, ['name'=>'required']);
		
		$item = new Item();
		$item->name = $request->input('name');
		$item->title = $request->input('title');
		$item->description = $request->input('description');
		$item->page_id = $request->input('page_id');
		$item->sort_order = $request->input('sort_order');
		$item->save();
		return redirect()->route('listItems', $request->page)->with('success', 'Item Created');
	}
	public function editItem($id) {
		$data['item'] = Item::find($id);
		$data['currentPage'] = Page::find($data['item']->page_id);
		$data['pages'] = $this->pages;
		
		return view('edititem')->with($data);
	}
	public function addImage(Request $request) {
		return 'add image';
	}
	public function updateItem(Request $request) {
		return 'update item';
	}
	public function editUser() {
		return 'edit user';
	}
	public function moveItemUp($id){
		$item = Item::find($id);
		$next = Item::where('sort_order', '>', $item->sort_order)->orderBy('sort_order', 'ASC')->take(1)->first();
		
		if ($next)
		{
			$sort_order = $item->sort_order;
			$item->sort_order = $next->sort_order;
			$next->sort_order = $sort_order;
			$item->save();
			$next->save();
		}

		$page = Page::find($item->page_id);
		return redirect()->route('listItems',['page'=>$page->page]);
	}
	public function moveItemDown($id) {
		$item = Item::find($id);
		$prev = Item::where('sort_order', '<', $item->sort_order)->orderBy('sort_order', 'DESC')->take(1)->first();
		
		if ($prev) {
			$sort_order = $item->sort_order;
			$item->sort_order = $prev->sort_order;
			$prev->sort_order = $sort_order;
			$item->save();
			$prev->save();		
		}

		$page = Page::find($item->page_id);
		return redirect()->route('listItems',['page'=>$page->page]);
	}
	public function deleteItem($id) {
		$item = Item::find($id);
		$page = Page::find($item->page_id);
		$item->delete();
		return redirect()->route('listItems',['page'=>$page->page]);		
	}
	
	public function updateUser(Request $request) {
		return 'update user';
	}
	public function logOut() {
		return ('logout');
	}
}