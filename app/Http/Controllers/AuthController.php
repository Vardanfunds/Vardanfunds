<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\ContactNotify;
use App\Notifications\UserNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function Logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->to("/login");
    }
    public function Login(Request $request)
    {
        try {
            $user = User::where('status', 1)->where('email', $request->email)->orWhere('username', $request->email)->first();

            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    $request->session()->put('user', $user);
                    Auth::login($user);
                    return redirect()->route('admin.index')->with('success', 'Welcome, Moderator!');
                }
            }
            return redirect()->back()->with('error', 'Invalid credentials.');
        } catch (\Exception $e) {
            Log::info("Login error " . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred during login.');
        }
    }
    public function notify($id)
    {
        $user = User::where('id', $id)->first();

        $user->notify(new ContactNotify($user));
        dd($user);
    }
    public function userstatus($id)
    {
        $userdetails = new User();
        $userid = $userdetails->where('id', $id)->first();

        if ($userid['status'] == 1) {
            $userid->status = '0';
            $userid->save();
        } else {
            $userid->status = '1';
            $userid->save();
        }
        return response()->json(['status' => true]);
    }
    public function register(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string',
        ]);

        $id = $request->id;
        $users = $id ? User::find($id) : new User();

        if (!$users) {
            $users = new User();
        }

        // Store plain password to mail user
        $plainPassword = $request->password;

        // Save User
        $users->name = $request->fullname;
        $users->username = $request->username;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);   // IMPORTANT
        $users->status = '1';
        $users->save();

        // Send notification (AFTER save)
        $users->notify(new UserNotify($users->email, $plainPassword)); 

        $request->session()->put('user', $users);
        //Auth::login($users);

        return redirect()->back()
            ->with('success', 'Account created successfully. Please check your email for login credentials.');
    }
}
