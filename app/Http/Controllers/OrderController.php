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
        $orders = DB::table('customers')
            ->join('customers_has_packages', 'customers.id', '=', 'customers_has_packages.customer_id')
            ->join('packages', 'customers_has_packages.packages_id', '=', 'packages.id')
            ->get();

        // $orders = DB::table('customers_has_packages')
        // ->join('customers', 'customers_has_packages.customer_id', 'customers.id')
        // ->join('packages', 'customers_has_packages.packages_id', '=', 'packages.id')
        // ->select('customers.username', 'packages.nama_paket')
        // ->get();


            
        // $orders = Orders::get(); 
        // mengirim data pegawai ke view index
      return view('cms.order.index',['orders' => $orders]);
        
    }
    public function loadData(Request $request)
    {
        if ($request->has('q')) {
            $cari = $request->q;
            $data = DB::table('customers_has_packages')
            ->join('customers','customers_has_packages.customer_id','customers.id')
            ->join('packages','customers_has_packages.packages_id','packages.id')
            ->select('customers_has_packages.id as id', 'customers.username','packages.nama_paket')->where('customers.username', 'like', '%' . $cari . '%')->get();
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
        return view('cms.order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('file')){
                $dir = 'payment/';
                $size = '360';
                $format = 'payment_';
                $image = $request->file('file');
                $request['file'] = \App\Helpers\ImageUploadHelper::pushStorage($dir, $size, $format, $image);
        }

        $orgDate = '1 '.$request->period;  
        $date = str_replace(' "', '/', $orgDate);  
        $request['period'] = date("Y/m/d", strtotime($date));
        //insert data ke table orders
        DB::table('orders')->insert($request->except('_token','paymentdate','file', 'type'));
        DB::table('payments')->insert($request->except('_token', 'customer_has_package_id','period',''));
        

        return ('sucess');
        // print_r($request->input());
        // alihkan halaman ke halaman order
        // return redirect('/order');
    
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
