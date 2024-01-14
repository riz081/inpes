<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Status;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimoniController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'client') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }

        $data = Testimonial::where('name', $user->name)->get();
        $status = Status::all();
        return view('pages.testimonial-user.dashboard', compact('data', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'client') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }
        $userTestimonial = User::where('name', $user->name)->get();
        return view('pages.testimonial-user.create', compact('userTestimonial'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'client') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }
        //validate form
        $this->validate($request, [
            'name'     => 'required',
            'job'     => 'required',
            'message'     => 'required',
        ]);

       
        //create post
        Testimonial::create([
            'name'     => $request->name,
            'job'     => $request->job,
            'message'     => $request->message,
        ]);

        //redirect to index
        return redirect()->route('testimoni.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get post by ID
        $testimoni = Testimonial::findOrFail($id);

        //render view with post
        return view('pages.testimonial-user.show', compact('testimoni'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'client') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }

        //get post by ID
        $testimonial = Testimonial::findOrFail($id);
        $userTestimonial = User::where('name', $user->name)->get();

        //render view with post
        return view('pages.testimonial-user.edit', compact('testimonial', 'userTestimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'client') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }

        //validate form
        $this->validate($request, [            
            'name'     => 'required',
            'job'     => 'required',
            'message'     => 'required',
        ]);

        //get post by ID
        $testimonial = Testimonial::findOrFail($id);

        $testimonial->update([
            'name'     => $request->name,
            'job'     => $request->job,
            'message'     => $request->message,
        ]);

        //redirect to index
        return redirect()->route('testimoni.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'client') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }

        $testimonial = Testimonial::find($id);

        if (!$testimonial) {
            return redirect()->route('testimoni')->with('error', 'Data not found.');
        }

        $testimonial->delete();

        return redirect()->route('testimoni.index')->with('success', 'Data deleted successfully.');
    }

}