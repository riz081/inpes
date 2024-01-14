<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthenticatedSessionController extends Controller
{

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Get the authenticated user
        $user = $request->user();

        // Additional user data you want to send
        $userData = [
            'name' => $user->name,
            'email' => $user->email,
            // Add other fields as needed
        ];

        // // Redirect to the intended URL with user data
        // return redirect()->intended('/admin')->with('userData', $userData);

        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->type == 'admin'){
                session(['userData' => $userData]);
                return redirect()->route('admin.index');
            }else {
                session(['userData' => $userData]);
                return redirect()->route('client');
            }
        }else{
            return redirect()->route('login')->with('error', 'Email Address and Password Are Wrong');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // return response()->noContent();
        return redirect('/login');
    }
}
