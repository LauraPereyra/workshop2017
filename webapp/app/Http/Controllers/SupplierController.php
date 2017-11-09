<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suppliers;
use App\Http\Requests\SupplierRequest;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Suppliers::orderby('id','ASC')->paginate(10);
        return view('supplier.index')->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierRequest $request)
    {
        $supplier = new Suppliers($request->all());
        $supplier -> name_supplier      = $request -> name_supplier;
        $supplier -> country            = $request -> country;
        $supplier -> cellphone          = $request -> phone;
        $supplier -> cellphone2         = $request -> phone2;
        $supplier -> phone              = $request -> cellphone;
        $supplier -> phone2             = $request -> cellphone2;
        $supplier -> email              = $request -> email;
        $supplier -> website            = $request -> website;
        $supplier -> address_supplier   = $request -> address_supplier;
        $supplier ->save();
        //dd('Orden creada');
        return redirect()->route('supplier.index');
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
        $supplier = Suppliers::find($id);
        return view('supplier.edit')->with('supplier', $supplier);
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
        $supplier = Suppliers::find($id);
        $supplier = new Suppliers($request->all());
        $supplier -> name_supplier      = $request -> name_supplier;
        $supplier -> country            = $request -> country;
        $supplier -> cellphone          = $request -> phone;
        $supplier -> cellphone2         = $request -> phone2;
        $supplier -> phone              = $request -> cellphone;
        $supplier -> phone2             = $request -> cellphone2;
        $supplier -> email              = $request -> email;
        $supplier -> website            = $request -> website;
        $supplier -> address_supplier   = $request -> address_supplier;
        $supplier -> save();
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Suppliers::find($id);
        //dd($supplier);
        $supplier->delete();
        return redirect()->route('supplier.index');
    }
}
