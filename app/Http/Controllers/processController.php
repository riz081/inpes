<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class processController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'admin') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }
        
        $data = DB::table('bookings')
        ->select('bookings.*')
        ->leftJoin('statuses', 'bookings.status_id', '=', 'statuses.id')
        ->where('statuses.status', 'Proses')
        ->get();

        $proses = Booking::leftJoin('statuses', 'bookings.status_id', 'statuses.id')
            ->where('statuses.status', 'Proses')
            ->count();
        
        $status = Status::all();

        return view('pages.dashboard.process', compact('data', 'proses', 'status'));
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
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'admin') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }
        
        $data = Booking::findOrfail($id);
        return view('pages.dashboard.detail-proses', compact('data'));
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
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'admin') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }

        $booking = Booking::find($id);

        if (!$booking) {
            return redirect()->route('process')->with('error', 'Data not found.');
        }

        $booking->delete();

        return redirect()->route('process.index')->with('success', 'Data deleted successfully.');
    }
}
