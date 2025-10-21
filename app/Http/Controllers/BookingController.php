<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Bookings;
use App\Models\Images;

class BookingController extends Controller
{
    public function bookingpage(){
        $images = Images::where('status_aktif', '=', 'aktif')->get();
        return view('booking', compact('images'));
    }

    public function form(): View
    {
        return view('formbooking');
    }

    public function formStore(Request $request)
{
    Bookings::create([
        'name'           =>$request->input('name'),
        'phone'          =>$request->input('phone'),
        'email'          =>$request->input('email'),
        'lokasi'         =>$request->input('lokasi'),
        'paket'          =>$request->input('paket'),
        'tempat'         =>$request->input('tempat'),
        'booking_date'   =>$request->input('booking_date'),
        'jam'            =>$request->input('jam'),
        'created_at'     =>NOW()
    ]);

    return redirect()->route('infopesanan.index');
}


    public function booking(){
        return view();
    }

    public function infopesanan(){
        $bookings = Bookings::latest()->first();
        return view('infopesanan', compact('bookings'));
    }
}
