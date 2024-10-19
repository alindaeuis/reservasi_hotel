<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\HotelRoom;
use Illuminate\Http\Request;
use Laravel\Sanctum\Http\Middleware\CheckAbilities;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function CheckAvailability($roomId) {
    //     $room = HotelRoom::findOrFail($roomId);
    //     $checkInDate = '2024-10-19';
    //     $checkOutDate = '2024-10-28';

    //     $reservedCount = Reservation::where('room_id', $roomId)->where(function ($query) use ($checkInDate, $checkOutDate) {
    //         $query->whereBetween('check_in_date', [$checkInDate, $checkOutDate])->orWhereBetween('check_out_date', [$checkInDate, $checkOutDate]);
    //     })->count();

    //     $availableRooms = $room->total_rooms - $reservedCount;

    //     return response()->json([
    //         'room_type'=> $room->type,
    //         'available_rooms' => $availableRooms,
    //     ]);
    // }

    public function index(Request $request)
    {
        $data = Reservation::where('name', 'LIKE', '%' . $request->search . "%")->simplePaginate(5)->appends($request->all());
        // dd($reservations);
        return view('reservation.reservation', compact('data'));
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = HotelRoom::all();
        // dd($rooms);
        return view('reservation.create_reserv', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:100',
            'room_id'=>'required',
            'type'=>'required',
            'check_in_date'=>'required',
            'check_out_date'=>'required',
        ]);

        Reservation::create($request->all());
        return redirect()->route('hotel_reservation.data')->with('success', 'Berhasil Menambakan Data Reservasi');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $showDetail = HotelRoom::find($id);
        // return view('reservation.detail_reserv', compact('showDetail'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reservation = Reservation::find($id);

        return view('reservation.edit_reserv', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|max:100',
            'room_id'=>'nullable',
            'type'=>'required',
            'check_in_date'=>'required',
            'check_out_date'=>'required',
        ]);

        Reservation::where('id', $id)->update([
            'name'=>$request->name,
            'room_id'=>$request->room_id,
            'type'=>$request->type,
            'check_in_date'=>$request->check_in_date,
            'check_out_date'=>$request->check_out_date,
        ]);

        return redirect()->route('hotel_reservation.data')->with('success', 'Berhasil Mengubah Data Reservasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Reservation::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Data Reservation');
    }
}
