<?php

namespace App\Http\Controllers;

use App\Models\Negara;
use App\Models\Status;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class negaraController extends Controller
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

        $data = Country::all();
        $status = Status::all();
        return view('pages.dashboard.dashboardNegara', compact('data', 'status'));
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
        return view('pages.country.create');
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
            'country'     => 'required',
        ]);

       
        //create post
        Country::create([
            'country'     => $request->country,
        ]);

        //redirect to index
        return redirect()->route('country.index')->with(['success' => 'Data Berhasil Disimpan!']);
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

        $data = Country::findOrfail($id);
        return view('pages.dashboard.addNegara', compact('data'));
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
        $country = Country::findOrFail($id);

        //render view with post
        return view('pages.country.edit', compact('country'));
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
            'country'   => 'required'
        ]);

        //get post by ID
        $country = Country::findOrFail($id);

        $country->update([
            'country'     => $request->country,
        ]);

        //redirect to index
        return redirect()->route('country.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        
        //get post by ID
        $country = Country::findOrFail($id);

        //delete post
        $country->delete();

        //redirect to index
        return redirect()->route('country.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
