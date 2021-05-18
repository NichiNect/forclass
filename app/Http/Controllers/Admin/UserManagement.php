<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserManagementRequest;

class UserManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->get();
        return view('admin.users-management.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users-management.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserManagementRequest $request)
    {
        $user = User::create([
            'role' => 'operator',
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_active' => '0'
        ]);

        if(!$user) {
            return redirect()->route('admin.users.index')->with('error', 'New User was Not Added.');
        }

        return redirect()->route('admin.users.index')->with('success', 'New User was Added Successfully. Please Activate the User First!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $user->createdAt = $user->created_at . ', ' . $user->created_at->diffForHumans();
        return response()->json(['data' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users-management.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserManagementRequest $request, $id)
    {
        $user = User::where('id', $id)->update([
            'role' => $request->role,
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'is_active' => $request->is_active
        ]);

        if(!$user) {
            return redirect()->route('admin.users.index')->with('error', 'Data User was Not Edited.');
        }

        return redirect()->route('admin.users.index')->with('success', 'Data User was Edited Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();

        if(!$user) {
            return redirect()->route('admin.users.index')->with('error', 'Data User was Not Deleted.');
        }

        return redirect()->route('admin.users.index')->with('success', 'Data User was Deleted Successfully.');
    }

    /**
     * Display the listing of data user not activated yet.
     * 
     * @return \Illuminate\Http\Response
     */
    public function userConfirmation()
    {
        $users = User::where('is_active', '0')->orderBy('created_at', 'desc')->get();

        return view('admin.users-management.userconfirm', compact('users'));
    }
    
    /**
     * Acc User Account
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function accUserConfirmation($id)
    {
        $user = User::findOrFail($id)->update([
            'is_active' => '1'
        ]);

        return redirect()->route('admin.users.userconfirmation')->with('success', 'User Have been Activated Successfully.');
    }
}
