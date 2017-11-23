<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Toys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UploadController extends Controller
{

    public function uploadForm($id)
    {
        $toy = Toys::find($id);
        return view('toys.photos',compact('toy'));
    }

    public function uploadSubmit(Request $request)
    {
        //$toy = Toys::create($request->all());]
        $toy = $request->input('id');
        //$toy= Toys::find($request->get('id'));
        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');
            Photo::create([
                'toy_id' => $toy,
                'images' => $filename
            ]);
        }
        return 'Upload successful!';
    }

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
