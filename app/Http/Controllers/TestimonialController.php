<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'admin') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }

        $data = Testimonial::all();
        $status = Status::all();
        return view('pages.testimonial.dashboard', compact('data', 'status'));
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
        $userTestimonial = User::all();
        return view('pages.testimonial.create', compact('userTestimonial'));
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
        return redirect()->route('testimonial.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get post by ID
        $testimoni = Testimonial::findOrFail($id);

        //render view with post
        return view('pages.testimonial.show', compact('testimoni'));
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
        $testimonial = Testimonial::findOrFail($id);
        $userTestimonial = User::all();

        //render view with post
        return view('pages.testimonial.edit', compact('testimonial', 'userTestimonial'));
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
        return redirect()->route('testimonial.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $testimonial = Testimonial::findOrFail($id);

        //delete post
        $testimonial->delete();

        //redirect to index
        return redirect()->route('testimonial.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    // Controller
    public function landingPage()
    {
        $testimonials = Testimonial::all();
        return view('pages.homeeng', compact('testimonials'));
    }

}
