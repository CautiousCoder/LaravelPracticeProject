<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::orderBy('created_at', 'DESC')->paginate(20);
        //return $user;
        return view('admin.user.index', compact('users'))->with('i',1);
    }

    public function create(){
        return view('admin.user.create');
    }

    public function store(Request $request){
        //
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email',
             'password' => 'required|min:8',
             'image' => 'required|image',
        ]);

        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->description = $request->input('description');
        $user->user_type = 'Member';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('user/',$filename);
            $user->image = 'user/'.$filename;
        }
        else {
            $user->image = 'noImage.jpg';
        }
        $user->save(); 

        return redirect()->back();
    }

    public function show(User $user){
        //
    }

    public function edit(User $user, $id){

        $data = User::find($id);
        //return $user;
        return view('admin.user.edit', ['data'=>$data]);
        
    }

    public function update(Request $request, User $user, $id){

        $data = User::find($id);
        $this->validate($request, [
            'name' => 'sometimes|nullable|string|max:255',
            'email' => "sometimes|nullable|unique:users,email,&user->id",
            'password' => 'sometimes|nullable|min:8',
        ]);
        
        $data->name = $request->name;
        $data->email = $request->email;
        $data->description = $request->description;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('user/',$filename);
            $data->image ='user/'.$filename;
        }

        if($request->has('password')){
            $data->password = Hash::make($request->input('password'));
        }

        //dd($request->all());
        $data->save();

        return redirect()->back();
    }

    public function destroy(User $user, $id){
        $data = User::find($id);
        if($data){
            $data->delete();
            return redirect()->route('user.index');
        }
    }

    public function profile(){
        $user = auth()->user();

        return view('admin.user.showProfile', compact('user'));
    }
}
