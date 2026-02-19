<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index(): View
    {
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }

    /**
     * Update the user's role.
     */
    public function updateRole(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'role' => ['required', 'in:admin,user'],
        ]);

        $user->update(['role' => $request->role]);

        return back()->with('status', 'User role updated successfully!');
    }

    /**
     * Delete the user.
     */
    public function destroy(User $user): RedirectResponse
    {
        if ($user->id === auth()->id()) {
            return back()->with('error', 'You cannot delete yourself!');
        }

        $user->delete();

        return back()->with('status', 'User deleted successfully!');
    }
}
