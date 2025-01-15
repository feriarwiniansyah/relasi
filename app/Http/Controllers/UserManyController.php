<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserManyController extends Controller
{
    /**
     * Display the form and list of users.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Get all users
        $users = User::latest()->get();

        // Return view with users data
        return view('usermany', compact('users'));
    }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Create a new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Encrypt the password
        ]);

        // Redirect back to the form with success message
        return redirect()->route('usermany.index')->with('success', 'User created successfully!');
    }
}
