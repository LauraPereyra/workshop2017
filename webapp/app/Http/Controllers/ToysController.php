<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ToyRequest;


class ToysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $img            = '123';

        $toyCreate = DB::table('toys')->insert([
            'idtoy' =>  $idtoy,
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'image' => $img
        ]);

        if($toyCreate){
            $result = 1;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
