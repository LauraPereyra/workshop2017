<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Orders;

class SupplierOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplierorders = Orders::orderby('id', 'ASC')->paginate(5);
        return view('supplierorder.index')->with('supplierorders', $supplierorders);
    }

    public function anyData()
    {
        return Datatables::of(User::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplierorder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$supplierorders = new Orders($request->except('_token'));
        dd($request->except('_token'));
        //$supplierorders ->save();
        //dd('Usuario creado ');
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
        $supplierorders = Orders::find($id);
        return view('supplierorder.edit')->with('supplierorders', $supplierorders);
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
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplierorders = Orders::find($id);
        //dd($supplierorders);
        $supplierorders->delete();

        return redirect()->route('supplierorder.index');
    }
}
