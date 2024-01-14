<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Snappy\Facades\SnappyPdf;

class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'admin') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }

        $data = Booking::all();
        $pengajuan = Booking::leftJoin('statuses', 'bookings.status_id', 'statuses.id')->where('statuses.status', 'Pengajuan')->count();
        $proses = Booking::leftJoin('statuses', 'bookings.status_id', 'statuses.id')->where('statuses.status', 'Proses')->count();
        $selesai = Booking::leftJoin('statuses', 'bookings.status_id', 'statuses.id')->where('statuses.status', 'Selesai')->count();
        $batal = Booking::leftJoin('statuses', 'bookings.status_id', 'statuses.id')->where('statuses.status', 'Batal')->count();
        $status = Status::all();

        // $userData = session('userData');
        // dd($userData);
        return view('pages.dashboard.dashboard', compact('data', 'pengajuan', 'proses', 'selesai', 'batal', 'status'));
        
    }

    public function clientHome()
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'client') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }
    

        $name = $user->name;

        $data = Booking::where('name', $name)->get();

        $pengajuan = Booking::where('name', $name)->leftJoin('statuses', 'bookings.status_id', 'statuses.id')->where('statuses.status', 'Pengajuan')->count();

        $proses = Booking::where('name', $name)->leftJoin('statuses', 'bookings.status_id', 'statuses.id')->where('statuses.status', 'Proses')->count();

        $selesai = Booking::where('name', $name)->leftJoin('statuses', 'bookings.status_id', 'statuses.id')->where('statuses.status', 'Selesai')->count();

        $batal = Booking::where('name', $name)->leftJoin('statuses', 'bookings.status_id', 'statuses.id')->where('statuses.status', 'Batal')->count();

        $status = Status::all();


        return view('pages.dashboard.dashboardClient', compact('data', 'pengajuan', 'proses', 'selesai', 'batal', 'status'));
    }

    public function show(string $id)
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'admin') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }

        $data = Booking::findOrfail($id);
        return view('pages.dashboard.detail-dashboard', compact('data'));
    }

    public function destroy($id)
    {

        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'admin') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }
        
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('admin.index')->with('success', 'Item deleted successfully.');
    }
}
