<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Status;
use Illuminate\Support\Facades\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExcelExport; // Import class ExcelExport

class ExcelController extends Controller
{
    public function generateExcel()
    {
        $booking = Booking::all();
        $pengajuan = Booking::leftJoin('statuses', 'bookings.status_id', 'statuses.id')->where('statuses.status', 'Pengajuan')->count();
        $proses = Booking::leftJoin('statuses', 'bookings.status_id', 'statuses.id')->where('statuses.status', 'Proses')->count();
        $selesai = Booking::leftJoin('statuses', 'bookings.status_id', 'statuses.id')->where('statuses.status', 'Selesai')->count();
        $batal = Booking::leftJoin('statuses', 'bookings.status_id', 'statuses.id')->where('statuses.status', 'Batal')->count();
        $status = Status::all();

        $data = [
            'title' => 'Excel Files',
            'booking' => $booking,
            'pengajuan' => $pengajuan,
            'proses' => $proses,
            'selesai' => $selesai,
            'batal' => $batal,
            'status' => $status,
        ];

        // Create Excel file using ExcelExport class
        return Excel::download(new ExcelExport($data), 'List_Pesanan.xlsx');
    }
}
