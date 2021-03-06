<?php

namespace App\Http\Controllers;

use App\Toys;
use Illuminate\Http\Request;
use App\Table;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ToyRequest;
use Illuminate\Support\Facades\Storage;
use Image;
use File;



class ToysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toys = Toys::All();
        return view('toys.list',compact('toys'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $toys = DB::table('toys')->get();
        return view('toys.create', compact('toys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ToyRequest $request)
    {
        $idtoy          = $request->input('idtoy');
        $name           = $request->input('name');
        $description    = $request->input('description');
        $price          = $request->input('price');
        $img            = ('notfoto.jpg');

        //$img = Input::file('images');

        $toyCreate = DB::table('toys')->insert([
            'idtoy' =>  strtoupper($idtoy),
            'name' => strtoupper($name),
            'description' => strtoupper($description),
            'price' => strtoupper($price),
            'image' => $img
        ]);

        if($toyCreate){
            $result = 1;
            $toyCreate= strtoupper($toyCreate);
        }
        else{
            $result = 0;
        }

       return response()->json(['result' => $result, 'query' => $toyCreate]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $toy = DB::table('toys')
            ->where('id',$id)
            ->first();
        return view('toys.edit',compact(['toy']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function photo($id)
    {
        $toy = Toys::find($id);
        return view('toys.photo',compact('toy'));
    }

    public function update_photo(Request $request)
    {
        $photo = $request->file('photo');
        $filename = time() . '.' . $photo->getClientOriginalExtension();
        Image::make($photo)->resize(250, 250)->save(public_path('images/avatars/' . $filename ) );
        $toy= Toys::find($request->get('id'));
        $toy->image = $filename;
        $toy->save();
        return view('toys.photo')->with('toy',$toy);


    }


    public function update(Request $request)
    {
        $toy = DB::table('toys')
            ->where('id',$request->input('id'))
            ->update([
                'idtoy' => $request->input('idtoy'),
                'name'=> $request->input('name'),
                'price'=> $request->input('price'),
                'description'=> $request->input('description')
                //'image'=> 'notfoto.jpg'
            ]);
        $toys = Toys::All();
        return view('toys.list',compact('toys'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toy = DB::table('toys')->where('id',$id)->delete();
        $toys =Toys::All();
        return view('toys.list',compact('toys'));
    }

}
