<?php 

namespace App\Http\Controllers;

use App\Event;

class EventsController extends Controller {

// show events list
  public function show($id)
  {
    return view('events.show')->withEvent(Event::find($id));
  }

}