<?php

namespace App\Http\Controllers;
// use App\Customers;
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

        public function cari(Request $request)
        {
            // menangkap data pencarian
            $cari = $request->cari;
     
                // mengambil data dari table pegawai sesuai pencarian data
            $customers = DB::table('customers')
            ->where('nama','like',"%".$cari."%")
            ->paginate();
     
                // mengirim data pegawai ke view index
            return view('cms.customer.index',['customers' => $customers]);
     
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    
        return view('cms.customer.create');
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
        'router_id' => $request->router_id
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
    public function update(Request $request)
    {
	// update data customer
	DB::table('customers')->where('id',$request->id)->update([
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
        $user= customers::where('id', $id)->get();
        
        if (is_null($user)){
            return 'tidak ditemukan';
        }else{
            customers::where('id', $id)->delete();
            return 'sucess delete';
        }
        
    }




// method untuk hapus data pegawai
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('customers')->where('id',$id)->delete();
		
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
