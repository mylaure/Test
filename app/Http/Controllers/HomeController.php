<?php 

// The controller for homepage

namespace App\Http\Controllers;

use App\Event;

class HomeController extends Controller {

	public function index()
	{
		return view('pages.home');
		//return view('event')->withEvents(Event::all());
	}

}