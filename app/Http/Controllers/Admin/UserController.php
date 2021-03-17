<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\User;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->user->all();
        return view('admin.modules.user.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modules.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=array(
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'birthday' => $request->birthday,
            'username' => $request->username,
            'gender' => $request->gender,
            'email' => $request->email,
            'address' => $request->address
        );
        $file = $request->file('avatar');  
        if ($file) {
            $name = $file->getClientOriginalName();
            $image = Str::random(4)."_".$name;
            while(file_exists("uploads/users/".$image)) {
                $image = Str::random(4)."_".$name;
            }
            $file->move('uploads/users/',$image);
            $data['avatar'] = $image;
        }else{
            $data['avatar'] = '';
        }
        $this->user->create($data);
        return back()->with('message','Insertd Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->user->find($id);
        return view('admin.modules.user.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->user->find($id)->update([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'birthday' => $request->birthday,
            'username' => $request->username,
            'gender' => $request->gender,
            'email' => $request->email,
            'address' => $request->address
        ]);
        return back()->with('message','Edit SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->user->find($id)->delete();
            return response()->json([
                'code'=>200,
                'message' => 'success'
            ]);
        } catch (\Exception $e) {
            Log::error('Message:'.$e->getMessage().'  Line : ' . $e->getLine());

            return response()->json([
                'code'=>500,
                'message' => 'fail'
            ]);

        }
    }

    public function progressLogin(Request $request) {

        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)) {
            return view('admin.modules.dasboard.index');
        }else{
            return redirect()->route('admin.login')->with('message','Email Or Password Wrong');

        }

    }


    public function login() {
        return view('admin.login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin.login');
    }


}
