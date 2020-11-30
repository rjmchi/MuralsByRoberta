<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Item;
use App\Page;
use App\Mail\Contact;

class galleryController extends Controller
{
	public function __construct() {
		$this->pages = Page::orderBy('sort_order')->get();
	}
	public function index() {
		$data['pages'] = $this->pages;
		$page = new Page();
		$page->page = 'home';
		$data['page'] = $page;
		return view('home', $data);
	}
	
	public function gallery($page) {
		$p = Page::where('page', $page)->first();
		$data['page'] = $p;
		$data['items'] = Item::where('page_id', $p->id)->orderBy('sort_order', 'DESC')->get();
		$data['pages'] = $this->pages;		
		return view('gallery', $data);
	}
	
	public function showImage(Request $request) {
		
		$item = Item::where('id',$request->id)->first();
		$data['item'] = $item;	
		
		if ($request->image == 0) {
			$image = Image::where([['item_id','=', $request->id],['name','=',sprintf('%s',$item->name)]])->first();
		}
		else
		{
			$image = Image::where('id', $request->image)->first();
		}	

		$data['image'] = $image;
	
		$data['filename'] = sprintf('/artwork/%s_%s.jpg',$item->page->page, $image->name);
		
		return view('image', $data);
	}
	
	public function contactme() {
		$data['pages'] = $this->pages;		
		$page = new Page();
		$page->page = 'contact';
		$data['page'] = $page;
		return view('contact', $data);
	}	
	
	public function contact(Request $request) {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
		]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
		$data['message'] = $request->message;
						
		\Mail::to('roberta@muralsbyroberta.com')->send( new Contact($data));
		return redirect('/');
	}	
}
