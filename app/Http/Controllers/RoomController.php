<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Auth;
use Session;
class RoomController extends Controller
{

    public function __construct() {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $rooms=Room::orderBy('id','desc')->get();
        return view('rooms.index')->withRooms($rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'room_code'=>'required',
            'room_description'=>'required',
            'capacity'=>'required'
        ]);
        $room=new Room();
        $room->room_code=$request->room_code;
        $room->room_description=$request->room_description;
        $room->capacity=$request->capacity;
        $room->campus_id=Auth::user()->campus_id;
        $room->save();
        Session::flash('success','New Room Created Successfully');
        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room=Room::find($id);
        return view('rooms.edit')->withRoom($room);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'room_code'=>'required',
            'room_description'=>'required',
            'capacity'=>'required'
        ]);
        $room=Room::find($id);
        $room->room_code=$request->room_code;
        $room->room_description=$request->room_description;
        $room->capacity=$request->capacity;
        $room->campus_id=Auth::user()->campus_id;
        $room->save();
        Session::flash('success','Room Updated Successfully');
        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
