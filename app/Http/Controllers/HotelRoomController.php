<?php

namespace App\Http\Controllers;

use App\Models\HotelRoom;
use Illuminate\Http\Request;

class HotelRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $room = HotelRoom::where('room_number', 'LIKE', '%'. $request->cari . '%')->simplePaginate(5)->appends($request->all());

        // $totalRooms = 5;
        // $emptyRows = $totalRooms - count($room);
        // for($i=1; $i <= $emptyRows; $i++) {
        //     $room->push(null);
        // }
        return view('hotel_rooms.hotel_room', compact('room'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotel_rooms.create_room');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'room_number'=>'required',
            'type'=>'required',
            'status'=>'required',
            'price'=>'required|numeric',
        ]);

        // $harga = match($request->input('type')) {
        //     'single'=>100000,
        //     'double'=>200000,
        //     'suite'=>400000,
        // };

        HotelRoom::create($request->all());
        // HotelRoom::create([
        //     'room_number'=>$request->input('room_number'),
        //     'type'=>$request->input('type'),
        //     'price'=>$request->input('price'),
        // ]);
        return redirect()->route('hotel_room.data')->with('success', 'Berhasil Menambahkan Data Kamar!');
    }

    /**
     * Display the specified resource.
     */
    public function show(HotelRoom $hotelRoom)
    {
        // $data = HotelRoom::with('Reservation')->get();

        // return view('hotel_rooms.hotel_room', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $hotelRoom = HotelRoom::find($id);
        return view('hotel_rooms.edit_room', compact('hotelRoom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'room_number'=>'required',
            'type'=>'required',
            'status'=>'required',
            'price'=>'required|numeric',
        ]);

        HotelRoom::where('id', $id)->update([
            'room_number'=>$request->room_number,
            'type'=>$request->type,
            'status'=>$request->status,
            'price'=> $request->price,
        ]);

        return redirect()->route('hotel_room.data')->with('success', 'Berhasil Mengubah Data Kamar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        HotelRoom::where('id', $id)->delete();
        return redirect()->back()->with('success', 'berhasil menghapus data kamar');
    }
}
