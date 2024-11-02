<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show all users
    public function showUsers()
    {
        $users = User::all(); // Retrieve all users
        return view('admin.users.index', compact('users'));
    }

    // Show a single user's full information
    public function showUser($id)
    {
        $user = User::findOrFail($id); // Fetch the user by ID
        return view('admin.users.show', compact('user')); // Create a view to display user details
    }

    // Create new user form
    public function createUser()
    {
        return view('admin.users.create');
    }

    // Store new user
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.users')->with('success', 'User created successfully.');
    }

    // Edit user form
    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    // Update user
    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);

        $user = User::findOrFail($id);
        $user->update($request->only('name', 'email'));

        return redirect()->route('admin.users')->with('success', 'User updated successfully.');
    }

    // Delete user
    public function destroyUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }

    // Block user
    public function blockUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->blocked = true; // Assuming you have a 'blocked' boolean column in your users table
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User blocked successfully.');
    }
}
