<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::query()->latest()->paginate(3);
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
            'name', 'phone', 'email', 'password', 'country', 'city', 'address','type','gender','status'
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

    public function update(Request $request , User $user){

        $request->validate([
            'name' => 'required| string| min:3| max:30',
            'phone' => 'required| string| min:8| max:11|unique:users,phone,'.$user->id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        ]);

        $data = $request->only([
            'name', 'phone', 'email', 'password', 'country', 'city', 'address','type','gender','status'
        ]);

        if(!empty($data['password'])){
            $data['password'] = Hash::make($data['password']);
        }else{
            $data = Arr::except($data,array('password'));
        }
        $user = User::query()->findOrFail($user->id)->update($data);

        if ($user) {
            return redirect()->route('users.index')->with('success', 'تم التعديل على بيانات المستخدم بنجاح');
        }
        else {
            return back()->with('error', 'حدث خطأ !');
        }
    }

    public function destroy(Request $request){
        $user = User::query()->findOrFail($request->id)->delete();
        if ($user){
            return redirect()->route('users.index')->with('success', 'تم حذف المستخدم بنجاح');
        }else{
            return back()->with('error', 'حدث خطأ !');
        }
    }

    public function verify_user(Request $request){
        $user = User::query()->findOrFail($request->id)->markEmailAsVerified();
        if ($user){
            return redirect()->route('users.index')->with('success', 'تم تأكيد البريد الإلكتروني بنجاح');
        }else{
            return back()->with('error', 'حدث خطأ !');
        }
    }

    public function active_user(Request $request){
        $user = User::query()->findOrFail($request->id)->update(['status' => 'active']);
        if ($user){
            return redirect()->route('users.index')->with('success', 'تم تفعيل المستخدم بنجاح');
        }else{
            return back()->with('error', 'حدث خطأ !');
        }
    }

    public function deactivate_user(Request $request){
        $user = User::query()->findOrFail($request->id)->update(['status' => 'inactive']);
        if ($user){
            return redirect()->route('users.index')->with('success', 'تم حظر المستخدم بنجاح');
        }else{
            return back()->with('error', 'حدث خطأ !');
        }
    }

    public function search_user(Request $request){

        $search = $request->get('query', false);
        $users = User::query()->where(function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%')
                ->orWhere('country', 'like', '%' . $search . '%')
                ->orWhere('city', 'like', '%' . $search . '%');
        })->latest()->paginate(20);

        return view('admin.users.index',compact('users'));

    }
    public function my_profile()
    {
        # code...
    }
}
