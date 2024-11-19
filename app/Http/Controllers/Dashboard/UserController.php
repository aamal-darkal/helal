<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller

{
    public function index(Request $request)
    {
        $state = '';
        if($request->has('state') && $request->state == 'change-password')
            $state = 'change-password';
        $users = user::with('branch')->get();
        return view('dashboard.users.index', compact('users' , 'state'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches = Branch::all();
        return view('dashboard.users.create', compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated =  $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:50|unique:users',
            'type' => 'required|in:admin,user,banned',
            'branch_id' => 'required|exists:branches,id',
        ]);

        user::create($validated);
        return to_route('dashboard.users.index')->with('success', "تم إضافة الحساب بنجاح");
    }


    public function edit(user $user)
    {
        $branches = Branch::all();
        return view('dashboard.users.edit',  compact('user', 'branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        $validated =  $request->validate([
            'name' => 'required|string|max:50',
            'email' => "required|string|max:50|unique:users,email,$user->id",
            'type' => 'required|in:admin,user,banned',
            'branch_id' => 'required|exists:branches,id',
        ]);
        $user->update($validated);


        return to_route('dashboard.users.index')->with('success', "تم تعديل الحساب بنجاح");
    }
    /** reset password */
    function changePassword(User $user , Request $request){
        $password = $request->password;
        $user->password = Hash::make($password);
        $user->save();
        return back()->with('success', "تم تعديل كلمة المرور لحساب $user->name بنجاح");
    }
}
