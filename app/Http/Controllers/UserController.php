<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index() {
        $users = User::get();
        return view('users.index', ['users'=>$users]);
    }
    public function create() {
        return view('users.create');
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'contact_number' => 'required|numeric|unique:users,contact_number',
            'address' => 'nullable',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|unique:users,email',
        ], [
            'contact_number.unique' => 'The contact number has already been taken.',
            'email.unique' => 'The email has already been taken.',
        ]);
    
        $user = new User;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->contact_number = $request->contact_number;
        $user->address = $request->address;
        $user->date_of_birth = $request->date_of_birth;
        $user->email = $request->email;
    
        $user->save();
        return back()->withSuccess('User Registered Successfully!');
    }
    public function edit($id) {
        $user = User::where('id', $id)->first();
        return view('users.edit', ['user' => $user]);
    }
    public function update(Request $request, $id) {
        $user = User::where('id', $id)->first();

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'contact_number' => [
                'required',
                'numeric',
                Rule::unique('users')->ignore($user->id),
            ],
            'address' => 'nullable',
            'date_of_birth' => 'required|date',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
        ], [
            'contact_number.unique' => 'The contact number has already been taken.',
            'email.unique' => 'The email has already been taken.',
        ]);
    
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->contact_number = $request->contact_number;
        $user->address = $request->address;
        $user->date_of_birth = $request->date_of_birth;
        $user->email = $request->email;
    
        $user->save();
        return back()->withSuccess('User Updated Successfully!');
    }
    public function destroy($id) {
        $user = User::where('id', $id)->first();
        $user->delete();
        return back()->withSuccess('User Deleted Successfully!');
    }
    public function view($id) {
        $user = User::where('id', $id)->first();
        return view('users.view', ['user' => $user]);
    }
}
