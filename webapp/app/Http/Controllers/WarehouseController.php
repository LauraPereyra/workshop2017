<?php

namespace App\Http\Controllers;

use App\WarehouseToy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Warehouse;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouse = Warehouse::orderby('id','ASC')->paginate(10);
        return view('warehouse.index')->with('warehouse', $warehouse);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = DB::table('branches')->pluck('name', 'id');
        return view('warehouse.create')->with(compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $warehouse = new Warehouse($request->all());
        $warehouse -> name                = $request -> name;
        $warehouse -> branch_id           = $request -> branch_id;
        $warehouse -> capacity            = $request -> capacity;
        $warehouse -> address             = $request -> address;
        $warehouse  ->save();
        //dd($warehouse);
        return redirect()->route('warehouse.index');
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
        $warehouse = Warehouse::find($id);
        return view('warehouse.edit')->with('warehouse', $warehouse);
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
        $warehouse = new Warehouse($request->all());
        $warehouse = DB::table('warehouses')
            ->where('id', $id)
            ->update([
                'name'       => $request -> name,
                'branch_id'  => $request -> branch_id,
                'capacity'   => $request -> capacity,
                'address'    => $request -> address
            ]);
        return redirect()->route('warehouse.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $warehouse = Warehouse::find($id);
        //dd($supplier);
        $warehouse->delete();
        return redirect()->route('warehouse.index');
    }

    public function transfer()
    {
        return view('warehouse.transfer');
    }

    public function maketransfer(Request $request)
    {
        //dd($request->all());
        $query = DB::table('warehouse_toys')
            ->where('warehouse_id', $request -> warehouse_origin);
        $query->decrement('stock', $request -> quantity);

        $query2 = DB::table('warehouse_toys')
            ->where('warehouse_id', $request -> warehouse_destiny);
        $query2 ->increment('stock', $request -> quantity);

        return redirect()->route('warehouse.index');
    }

    public function showstock($id)
    {

        $stock = DB::table('warehouse_toys')
            ->select('*')
            ->where('warehouse_id', $id)
            ->get();
        //dd($stock2);
        return view('warehouse.stocklist')->with('stock', $stock );
    }
}
