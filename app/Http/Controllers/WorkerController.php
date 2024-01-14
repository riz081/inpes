<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkerController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // dd($user->type);
        if ($user && $user->type !== 'admin') {
            Auth::logout(); // Log out the user                
            return redirect('/login');
        }

        $data = Worker::all();
        $status = Status::all();
        return view('pages.worker.dashboard', compact('data', 'status'));
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
        $worker = Worker::all();
        return view('pages.worker.create', compact('worker'));
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
            'job'     => 'required'
        ]);

       
        //create post
        Worker::create([
            'name'     => $request->name,
            'job'     => $request->job
        ]);

        //redirect to index
        return redirect()->route('worker.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $worker = Worker::findOrFail($id);

        //render view with post
        return view('pages.worker.edit', compact('worker'));
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
        ]);

        //get post by ID
        $worker = Worker::findOrFail($id);

        $worker->update([
            'name'     => $request->name,
            'job'     => $request->job,
        ]);

        //redirect to index
        return redirect()->route('worker.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $worker = Worker::findOrFail($id);

        //delete post
        $worker->delete();

        //redirect to index
        return redirect()->route('worker.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
