<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class serviceController extends Controller
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

        $data = Service::all();
        $status = Status::all();
        return view('pages.dashboard.dashboardService', compact('data', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'admin') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }
        return view('pages.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'admin') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }
        //validate form
        $this->validate($request, [
            'service'     => 'required',
        ]);

       
        //create post
        Service::create([
            'service'     => $request->service,
        ]);

        //redirect to index
        return redirect()->route('service.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'admin') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }

        //get post by ID
        $service = Service::findOrFail($id);

        //render view with post
        return view('pages.layanan.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'admin') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }

        //validate form
        $this->validate($request, [            
            'service'   => 'required'
        ]);

        //get post by ID
        $service = Service::findOrFail($id);

        $service->update([
            'service'     => $request->service,
        ]);

        //redirect to index
        return redirect()->route('service.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'admin') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }
        //get post by ID
        $service = Service::findOrFail($id);

        //delete post
        $service->delete();

        //redirect to index
        return redirect()->route('service.index')->with(['success' => 'Data Berhasil Dihapus!']);
        
    }
}
