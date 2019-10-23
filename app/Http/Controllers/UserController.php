<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if (Auth::user()->cannot('user_read')) {
            abort(403, 'Permission denied.');
        }
        $users = User::all();

        return view('user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       if (Auth::user()->cannot('user_write')) {
            abort(403, 'Permission denied.');
        }

        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if (Auth::user()->cannot('user_write')) {
            abort(403, 'Permission denied.');
        }

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            //'role' => 'required',
            'password' => 'min:6|confirmed',
            'password_confirmation' => 'min:6'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 'user_read|user_write|banner_read|banner_write|category_read|category_write|post_read|post_write|
        salon_read|salon_write|service_write|service_read|customer_write|customer_read';
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       if (Auth::user()->cannot('user_write')) {
            abort(403, 'Permission denied.');
        }

        $user = User::findOrFail($id);

        return view('user.profile',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        if (Auth::user()->cannot('user_write')) {
            abort(403, 'Permission denied.');
        }

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
            //'role' => 'required',

        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 'user_read|user_write|banner_read|banner_write|category_read|category_write|post_read|post_write|
        salon_read|salon_write|service_write|service_read|customer_write|customer_read';

        if ($request->password) {
            $this->validate($request, [
                'password' => 'min:6|confirmed',
                'password_confirmation' => 'min:6'
            ]);

            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.user.edit', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getProfile()
    {
        $user = Auth::user();

        return view('user.profile', ['user' => $user]);
    }

    public function putProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'min:6|confirmed',
            'password_confirmation' => 'min:6'
        ]);

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.dashboard');
    }
}
