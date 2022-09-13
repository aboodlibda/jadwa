<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Testing\Fluent\Concerns\Has;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::query()->latest()->paginate(20);
        return view('admin.users.index',compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function show(User $user)
    {
        return view('admin.users.show');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:30'],
            'phone' => ['required', 'string', 'min:8', 'max:11', 'unique:users,phone'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        $data = $request->only([
            'name', 'phone', 'email', 'password', 'country', 'city', 'address','type','age',
        ]);
        $data['password'] = Hash::make($data['password']);

        $user = User::query()->create($data);

        if ($user) {
            return back()->with('success', 'تم إنشاء المستخدم بنجاح');
        }
        else {
            return back()->with('failed', 'حدث خطأ !');
        }

    }
}
