<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
        public function index()
        {
            // mengambil data dari table pegawai
            $users = DB::table('users')->paginate(10);
     
            // mengirim data pegawai ke view index
            return view('Content.Customer',['users' => $users]);
     
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
            $users = DB::table('users')
            ->where('nama','like',"%".$cari."%")
            ->paginate();
     
                // mengirim data pegawai ke view index
            return view('customer',['users' => $users]);
     
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Users::create([
            'nama'  => $request->nama,
            'username'  =>  $request->username,
            'contact_person'    =>  $request->contact_person,
            'alamat'    => $request->alamat,
            'password'  => Hash::make($request->password)
        ]);
        
        return redirect()->route('customer-index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table pegawai
	DB::table('users')->insert([
		'nama' => $request->nama,
		'username' => $request->username,
		'contact_person' => $request->contact_person,
		'alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');

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
	$users = DB::table('users')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['users' => $users]);
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
	DB::table('users')->where('id',$request->id)->update([
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
        $user= Users::where('id', $id)->get();
        
        if (is_null($user)){
            return 'tidak ditemukan';
        }else{
            Users::where('id', $id)->delete();
            return 'sucess delete';
        }
        
    }




// method untuk hapus data pegawai
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('users')->where('id',$id)->delete();
		
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
