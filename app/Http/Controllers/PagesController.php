<?php

//This page controls static pages
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use Mail;
use Session;

class PagesController extends Controller{

//insert more function to show the static pages
	public function getIndex(){
		//return view('pages.main');
	}

	public function getAbout(){
		return view('pages.about');
	}

	public function getService(){
		return view('pages.service');
	}

	public function getMembership(){
		return view('pages.membership');
	}

	public function getEvent(){
		return view('pages.event')->withEvents(Event::all());
	}

	public function getContact(){
		return view('pages.contact');
	}

	public function postContact(Request $request){
		$this->validate($request, [
			'email' => 'required|email',
			'firstname' => 'min:2',
			'lastname' => 'min:2',
			'message' => 'min:10']);

		$data = array(
			'email' => $request->email,
			'firstname' => $request->firstname,
			'lastname' => $request->lastname,
			'bodyMessage' => $request->message
			); 

		//It should be Mail::send('view',$data,function);
		Mail::send('emails.contact', $data, function($message) use($data){
			$message->from('miamayan@163.com');
			//$message->from($data['email']);//it is the guest's email, I also can change it into the server email address
			$message->to('miamayan177@gmail.com');//maybe the marketing@cctvplus.com
			$message->subject($data['bodyMessage']);
		});

		Session::flash('success','Your Email was Sent!');//this doesn't work, I may can use the js

		return redirect('contact');
	}

}