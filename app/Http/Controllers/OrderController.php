<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table order
        $orders = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('packages', 'orders.packages_id', '=', 'packages.id')
            ->select('orders.*','customers.*','packages.*')
            ->get();
        // $orders = Orders::get(); 
        // mengirim data pegawai ke view index
      return view('cms.order.index',['orders' => $orders]);
        
    }
    public function loadData(Request $request)
    {
        if ($request->has('q')) {
            $cari = $request->q;
            $data = DB::table('customers')->select('id', 'username')->where('username', 'like', '%' . $cari . '%')->get();
            return response()->json($data);
        }
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
          // insert data ke table orders
	    DB::table('orders')->insert([
            'nama' => $request->nama,
            'username' => $request->username,
            'contact_person' => $request->contact_person,
            'alamat' => $request->alamat,
            'router_id' => $request->router_id
        ]);
        // alihkan halaman ke halaman order
        return redirect('/order');
    
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
