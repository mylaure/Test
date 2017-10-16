<?php 
 // create,store,edit,update,destroy Function for Event 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Event;

use Redirect, Input, Auth;

class EventsController extends Controller {

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:events|max:255',
            'body' => 'required',
        ]);

        $event = new Event;
        $event->title = Input::get('title');
        $event->brief = Input::get('brief');
        $event->location = Input::get('location');
        $event->category = Input::get('category');
        $event->date = Input::get('date');
        $event->body = Input::get('body');

        if ($event->save()) {
            return Redirect::to('admin');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.events.edit')->withEvent(event::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|unique:events,title,'.$id.'|max:255',
            'body' => 'required',
        ]);

        $event = Event::find($id);
        $event->title = Input::get('title');
        $event->brief = Input::get('brief');
        $event->location = Input::get('location');
        $event->category = Input::get('category');
        $event->date = Input::get('date');
        $event->body = Input::get('body');


        if ($event->save()) {
            return Redirect::to('admin');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();

        return Redirect::to('admin');
    }

}