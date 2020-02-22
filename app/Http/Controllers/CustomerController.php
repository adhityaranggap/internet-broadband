<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
        public function index()
        {
            // mengambil data dari table customer
            $customers = DB::table('customers')->paginate(10);
    
            // mengirim data customer ke view index
            return view('cms.customer.index',['customers' => $customers]);
        }
    
        public function formulir()
        {
            return view ('formulir');
        }
    
        public function proses(Request $request)
        {
            $nama = $request->input('nama');
             $alamat = $request->input('alamat');
            return "Nama : ".$nama.", Alamat : ".$alamat;
        }

        // public function cari(Request $request)
        // {
        //     $data = null

        //     if($request->has('username'))
        //     {
        //         $search = $request->username;
                
        //         $orders = DB::table('customers')
        //             ->join('customers_has_packages', 'customers.id', '=', 'customers_has_packages.customer_id')
        //             ->join('packages', 'customers_has_packages.packages_id', '=', 'packages.id')
        //             ->join('orders', 'customers_has_packages.id', '=', 'orders.customer_has_package_id')
        //             ->leftjoin('payments','orders.payment_id','=','payments.id')
        //             ->where('orders.period', '!=', null)
        //             ->orderBy('orders.period','desc')
        //             ->get();

                    
        //         $arrOrders = Array();
        //         foreach ($orders as $order)
        //         {
        //             $arrOrders[$order->customer_id]["username"] = $order->username;
        //             $arrOrders[$order->customer_id]["nama"] = $order->nama;
        //             $arrOrders[$order->customer_id]["harga_paket"] = $order->harga_paket;
        //             $arrOrders[$order->customer_id]["status"] = $order->status;
        //             $arrOrders[$order->customer_id]["period"][] = [
        //                                                             'date' => Carbon::parse($order->period)->format('F Y'),
        //                                                             'file'  => $order->file
        //                                                         ];
        //         }

        //         foreach($arrOrders as $order)
        //         {
        //             '<tr>'.
		// 			'<td>'. $order['username'] .'</td>'.
        //             '<td>'.\App\Helpers\Helper::toRp(order['harga_paket']) .'</td>'.
        //             //kebawah masih error
		// 			<td>
        //                 @foreach($order['period'] as $period)
                            
        //                     <a href="{{url('storage/'.$period['file'])}}" src="{{url('storage/'.$period['file'])}}" class="btn pop btn-primary btn-sm" size="25%" title="{{$period['date']}}">{{ $period['date'] }}</a>
        //                 @endforeach
        //                 </td>
        //                 <td>{{ $order['status'] }}</td>
                        
        //             </tr>
        //         }


        //         '<td>'.
        //             '<tr>'.$order->username.'</tr>'.
        //             '<tr>'.$order->harga_paket.'</tr>'.
        //             '<tr>'.$order->status.'</tr>'.                        
        //         '</td>';
        //     }
        // {

        //     if($request->ajax())
        //     {
        //     $output = '';
        //     $query = $request->get('query');
        //     if($query != '')
        //     {
        //         $data = DB::table('customers')
        //         ->where('nama', 'like', '%'.$query.'%')
        //         ->orWhere('username', 'like', '%'.$query.'%')
        //         ->orWhere('contact_person', 'like', '%'.$query.'%')
        //         ->orderBy('id', 'desc')
        //         ->get();
                
        //     }
        //     else
        //     {
        //     $data = DB::table('customers')
        //         ->orderBy('id', 'desc')
        //         ->get();
        //     }
        //     $total_row = $data->count();
        //     if($total_row > 0)
        //     {
        //     foreach($data as $row)
        //     {
        //         $output .= '
        //         <tr>
        //         <td>'.$row->nama.'</td>
        //         <td>'.$row->username.'</td>
        //         <td>'.$row->contact_person.'</td>
        //         <td>'.$row->alamat.'</td>
        //         <td>
        //         <a class="btn btn-warning btn-sm mt-2 modal-show edit" title="Edit Customer" href="/customer/edit/{{ $p->id }}">Edit</a>
        //         <a class="btn btn-danger btn-sm mt-2 btn-delete" href="/customer/hapus/{{ $p->id }}">Hapus</a>
        //         </td>
        //         </tr>
        //         ';
        //     }
        //     }
        //     else
        //     {
        //     $output = '
        //     <tr>
        //         <td align="center" colspan="5">No Data Found</td>
        //     </tr>
        //     ';
        //     }
          
        //     $data = array(
        //     'table_data'  => $output,
        //     'total_data'  => $total_row
        //     );

        //     echo json_encode($data);
        //   }
          
        // {
        //     // menangkap data pencarian
        //     $cari = $request->cari;
     
        //         // mengambil data dari table pegawai sesuai pencarian data
        //     $customers = DB::table('customers')
        //     ->where('nama','like',"%".$cari."%")
        //     ->paginate();
     
        //         // mengirim data pegawai ke view index
        //     return view('cms.customer.index',['customers' => $customers]);


     
        // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    
        return view('cms.customer.modal-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table customer
	    DB::table('customers')->insert([
		'nama' => $request->nama,
		'username' => $request->username,
		'contact_person' => $request->contact_person,
        'alamat' => $request->alamat,
        'router_id' => 1
	]);
	// alihkan halaman ke halaman customer
	return redirect('/customer');

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

    
	// mengambil data pegawai berdasarkan id yang dipilih
	$customer = DB::table('customers')->where('id',$id)->first();
	// passing data pegawai yang didapat ke view edit.blade.php
    // return view('edit',['customers' => $customers]);
    return view('cms.customer.edit', compact('customer'));
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
	// update data customer
	DB::table('customers')->where('id',$id)->update([
		'nama' => $request->nama,
		'username' => $request->username,
		'contact_person' => $request->contact_person,
		'alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/customer');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= Customer::where('id', $id)->get();
        
        if (is_null($user)){
            return 'tidak ditemukan';
        }else{
            Customer::where('id', $id)->delete();
            return 'sucess delete';
        }
        
    }




// method untuk hapus data pegawai
    public function hapus($id)
    {

	// menghapus data pegawai berdasarkan id yang dipilih
	$user= Customer::where('id', $id)->first();
        
        if (is_null($user)){
            return 'tidak ditemukan';
        }else{
            $user->delete();
            return 'sucess delete';
        }
		
	// alihkan halaman ke halaman pegawai
	return redirect('/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
