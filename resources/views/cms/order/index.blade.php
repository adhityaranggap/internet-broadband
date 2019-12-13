@extends('layouts.mainlayout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

			<div class="card-body">
				

				
				<h3>Data customer</h3>

				<p>Cari Data customer :</p>

				<div class="form-group">
					
				</div>
				<form action="/customer/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari customer .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

				<br/>

				<table class="table table-bordered">
					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>Paket</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					
					@foreach($orders as $o)
					<tr>
						<td>{{ $o->customer_id }}</td>
						<td>{{ $o->username }}</td>
						<td>{{ $o->harga_paket }}</td>
						<td>{{ $o->alamat }}</td>
						<td>
							<a class="btn btn-warning btn-sm mt-2" href="/customer/edit/{{ $o->id }}">Edit</a>
							<a class="btn btn-danger btn-sm mt-2" href="/customer/hapus/{{ $o->id }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
			
			</div>

@endsection