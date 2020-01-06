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
					<div class="row">
						<div class="col-6">
							<form action="/customer/cari" method="GET" class="form-inline">
								<input class="form-control" type="text" name="cari" placeholder="Cari customer .." value="{{ old('cari') }}">
								<input class="btn btn-primary ml-3" type="submit" value="CARI">
							</form>

						</div>
						<div class="col-6">
						<a href="{{ route('order-create') }}" class="btn btn-primary float-right modal-show" title="Tambah Pembayaran">Tambah Pembayaran</a>

						</div>
				<br/>
				<br/>
				<table class="table table-bordered">
					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>Paket</th>
						<th>Periode Bayar</th>
						<th>Bukti Bayar</th>
						<th>Opsi</th>
					</tr>
					
					@foreach($orders as $o)
					<tr>
						<td>{{ $o->customer_id }}</td>
						<td>{{ $o->username }}</td>
						<td>@currency ($o->harga_paket) </td>
						<td>{{ $o->period }}</td>
						<td><img class="pop" width="150px" src="{{ url('storage/'.$o->file) }}" title="{{$o->username}}"></td>
						<td>
							<a class="btn btn-warning btn-sm mt-2" href="/customer/edit/{{ $o->id }}">Edit</a>
							<a class="btn btn-danger btn-sm mt-2" href="/order/hapus/{{ $o->id }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
			
			</div>
	@include('layouts.modal')
@endsection
@push('script')
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
		<script src="{{ asset('js/modal.js') }}"></script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>
			
@endpush