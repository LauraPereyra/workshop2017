<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderby('id','ASC')->paginate(10);
        return view('user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User($request->all());
        $user -> names = $request -> names;
        $user -> lastname1 = $request -> lastname1;
        $user -> lastname2 = $request -> lastname2;
        $user -> phone = $request -> phone;
        $user -> cellphone = $request -> cellphone;
        $user -> address = $request -> address;
        $user -> sex = $request -> sex;
        $user -> birthday = $request -> birthday;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> role = $request -> role;
        $user ->save();
        //dd('usuario creado');
        //dd($user);
        return redirect()->route('user.index');
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
        $user = User::find($id);
        return view('user.edit')->with('user', $user);
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
        $user = User::find($id);
        $user -> names = $request -> names;
        $user -> lastname1 = $request -> lastname1;
        $user -> lastname2 = $request -> lastname2;
        $user -> phone = $request -> phone;
        $user -> cellphone = $request -> cellphone;
        $user -> address = $request -> address;
        $user -> sex = $request -> sex;
        $user -> birthday = $request -> birthday;
        $user -> email = $request -> email;
        if (isset($request -> password)){
            $user -> password = bcrypt($request -> password);
        }
        $user -> role = $request -> role;
        $user ->save();
        return redirect()->route('user.index');
        //dd('El usuario fue actualizado');
        //dd($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        //dd($user);
        $user->delete();
        return redirect()->route('user.index');
        //dd('El usuario fue eliminado');
    }
}
