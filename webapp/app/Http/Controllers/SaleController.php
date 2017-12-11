<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$warehouse = Warehouse::orderby('id','ASC')->paginate(10);
        return view('sale.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*if(!count($request->input('id_toy_hidden'))){
            $state  = 0;
            return response()->json([
                'state' => $state,
                'errorCode' => 1,
                'message' => 'Complete el formulario, Ingrese los productos a comprar',
            ]);
        }*/
        $idCustomer = $request->input('id_customer');
        // FLAGS
        $helper = $request->input('helper');
        $state  = 1 ;
        DB::beginTransaction();
        try{
            if ($helper != 1){
                DB::table('customers')->insert([
                    'nit'        => $request->input('nit'),
                    'name'      => $request->input('name'),
                    'lastname'  => $request->input('lastname'),
                    'birthday'  => $request->input('birthday'),
                    'phone'     => $request->input('phone'),
                    'email'       => $request->input('email'),
                    'address'   => $request->input('address')
                ]);
                $idCustomer = Customer::all()->last()->id;
            }
            $user = Auth::user();
            DB::table('sales')->insert([
                'user_id'            => Auth::id(),
                'date_sale'          => date('Y-m-d'),
                'status'             => 'Facturado',
                'branch_id'          => $user->branch_id,
                'customer_id'          => $idCustomer
            ]);
            $idSale = Sale::all()->last()->id;

            $id_toy = $request->input('id_toy');
            $name_toy = $request->input('name_toy');
            $quantity = $request->input('quantity');
            $price_sell = $request->input('price_sell');
            $price_total = $request->input('price_total');
            $data= [];
            for($i=0; $i<count($id_toy); $i++){
                $list = [
                    'sale_id'           => $idSale,
                    'toy_id'            => $id_toy[$i],
                    'quantity'          => $quantity[$i],
                    'price_unit'        => $price_sell[$i],
                    'price_total'       => $price_total[$i],
                ];
                array_push($data,$list);
            }
            DB::table('sales_details')->insert($data);
            DB::commit();
            $showFacturation = '/sale/'.$idSale;
            return response()->json([
                'state' => $state,
                'show' => $showFacturation,
            ]);
        }catch (\Exception $e){
            DB::rollback();
            $state  = 0;
            return response()->json([
                'state' => $state,
                'errorCode' => $e->getCode(),
                //'message' => '¡No se registraron los datos!',
                'message'  => $e->getMessage(),
            ]);
        }catch (\Throwable $e) {
            DB::rollBack();
            $state = 0;
            return response()->json([
                'state' => $state,
                'errorCode' => $e->getCode(),
                'message'=> $e->getMessage()
            ]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
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

    public function autocompleteCustomer(Request $request){
        $term   = $request->term;
        $column = 'nit';
        $result = $this->searchCustomer($column, $term);
        return response()->json($result);
    }
    public function autocompleteToys(Request $request){
        $term   = $request->term;

        $query = DB::table('toys')
            ->join('warehouse_toys', 'toys.id', '=', 'warehouse_toys.toy_id')
            ->select('toys.*', 'warehouse_toys.*')
            ->where('toys.name', 'LIKE', '%'.$term.'%')
            ->take(5)
            ->get();

        $result = array();
        foreach ($query as $key => $value)
        {
            $result[] = [
                'value' =>'Producto: '.$value->name,
                'id'        =>  $value->id,
                'name'      =>  $value->name,
                'precio_compra'  =>  $value->precio_compra,
            ];
        }
        return response()->json($result);
    }


    private function searchCustomer($column, $term)
    {
        $query = DB::table('customers')
            ->select('customers.*')
            ->where('customers.'.$column, 'LIKE', '%'.$term.'%')
            ->take(5)
            ->get();
        $result = array();
        foreach ($query as $key => $value)
        {
            $result[] = [
                'value' =>''.$value->$column,
                'id'        =>  $value->id,
                'nit'        =>  $value->nit,
                'name'      =>  $value->name,
                'lastname'  =>  $value->lastname,
                'birthday'  =>  $value->birthday,
                'phone'     =>  $value->phone,
                'address'   =>  $value->address,
                'email'     => $value->email,
            ];
        }
        return $result;
    }
}
