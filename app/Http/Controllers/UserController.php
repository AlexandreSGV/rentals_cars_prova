<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(\App\Models\User::class, 'user');
    }
    
    /**
     * List all users
     */
    public function index()
    {
        $users = User::orderBy('name')->get();

        return view('users.index', compact('users'));
    }

    /**
     * Show user details
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show edit form
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update user data
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'role'  => ['required', 'in:cliente,vendedor,gerente'],
        ]);

        $user->update($data);

        return redirect()->route('users.index');
    }
}
