<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;


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
            ->join('orders', 'customers_has_packages.id', '=', 'orders.customer_has_package_id')
            ->leftjoin('payments','orders.payment_id','=','payments.id')
            ->where('orders.period', '!=', null)
            ->orderBy('orders.period','desc')
            ->get();

            
        $arrOrders = Array();
        foreach ($orders as $order)
        {
            $arrOrders[$order->customer_id]["username"] = $order->username;
            $arrOrders[$order->customer_id]["nama"] = $order->nama;
            $arrOrders[$order->customer_id]["harga_paket"] = $order->harga_paket;
            $arrOrders[$order->customer_id]["status"] = $order->status;
            $arrOrders[$order->customer_id]["period"][] = [
                                                            'date' => Carbon::parse($order->period)->format('F Y'),
                                                            'file'  => $order->file
                                                        ];
        }
        // return $arrOrders;
        //mengirim data order ke view index
      return view('cms.order.index', compact('arrOrders'));
        
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
        // $request['payment_id'] = '1';
        // $request['customer_has_package_id'] = '1';
        $request['multiplier'] = '1';
        $request['status'] = 'aktif';
        $request['notes'] = '-';
        // $request['file'] = '-';
        
        if($request->file('berkas')){
            $dir = 'payment/';
            $size = '360';
            $format = 'payment_';
            $image = $request->file('berkas');         
            $request['file'] = \App\Helpers\ImageUploadHelper::pushStorage($dir, $size, $format, $image);
    }
        DB::table('payments')->insert($request->except('_token', 'customer_has_package_id','period','payment_id', 'multiplier', 'status', 'notes', 'berkas'));
        $paymentid = DB::getPdo()->lastInsertId();
        $request['payment_id'] = $paymentid;
        DB::table('orders')->insert($request->except('_token','paymentdate','file', 'type', 'berkas'));
        return 'sukses nembak db';


        $orgDate = '1 '.$request->period;  
        $date = str_replace(' "', '/', $orgDate);  
        $request['period'] = date("Y/m/d", strtotime($date));
        //insert data ke table orders
        DB::table('payments')->insert($request->except('_token', 'customer_has_package_id','period',''));
        $paymentid = DB::getPdo()->lastInsertId();
        $request['payment_id'] = $paymentid;
        DB::table('orders')->insert($request->except('_token','paymentdate','file', 'type'));
        

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
    public function hapus($id)
    {
        // Delete
        DB::table('order')->where('id', $id)->delete();
    }
}
