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
        $supplierorders = Orders::orderby('id', 'ASC')->paginate(10);
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
        $supplierorders = new Orders($request->all());
        $supplierorders -> order_date = now();
        $supplierorders -> order_arrive = $request -> order_limit_date;
        $supplierorders -> status = $request -> order_status;
        $supplierorders -> supplier_id = $request -> supplier;
        $supplierorders -> matrix_house_id = $request -> matrix_house;

        //dd($supplierorders);
        $supplierorders ->save();
        //dd('Orden creada');
        return redirect()->route('supplierorder.index');
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
        $supplierorders = Orders::find($id);
        $supplierorders -> order_date      = now();
        $supplierorders -> order_arrive    = $request -> order_limit_date;
        $supplierorders -> status          = $request -> order_status;
        $supplierorders -> supplier_id     = $request -> supplier;
        $supplierorders -> matrix_house_id = $request -> matrix_house;
        $supplierorders -> save();
        return redirect()->route('supplierorder.index');
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
