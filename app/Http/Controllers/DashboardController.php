<?php

namespace App\Http\Controllers;

use App\Models\HotelRoom;
use App\Models\Reservation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $totalRooms = HotelRoom::count();
    $totalReservations = Reservation::count();
    // $bookedRooms = HotelRoom::whereHas('reservations')->count();
    // $availableRooms = $totalRooms - $bookedRooms;
      return view('dashboard.dashboard', [
        'totalRooms'=> $totalRooms,
        'totalReservations'=>$totalReservations,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
