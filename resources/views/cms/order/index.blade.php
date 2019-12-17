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
						<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
							Tambah Pembayaran
							</button>
							
							<!-- Modal -->
							<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Pembayaran</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
								<form action="{{ route('order-create')}}" method="">
								<meta name="c-token" content="{!! csrf_token() !!}" />
									<div class="form-group">
										<label for="username">Username</label>
										<select class="cari form-control" style="width:450px;" name="username" id="username"></select>
									</div>
									
									<div class="form-group">
										<label for="Period">Periode</label>
										<input class="form-control" type="month" value="2020-01" id="Period">
									</div>
									<div class="form-group">
										<label for="Paymenttype">Metode Pembayaran</label>
										<select class="form-control" id="Paymenttype">
										<option value="BCA">Bank Transfer BCA</option>
										<option value="CASH">Cash</option>
										<option value="OVO">OVO</option>
										<option value="DANA">DANA</option>
										<option value="GOPAY">GOPAY</option>
										</select>
									</div>
									<div class="form-group">
										<label for="paymentdate">Tanggal Bayar</label>
										<input class="form-control" type="date" value="2020-01-01" id="paymentdate">
									</div>
									<div class="form-group">
										<label for="file">File Payment</label>
										<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
										<small id="fileHelp" class="form-text text-muted">Upload Bukti Pembayaran Diterima</small>
									</div>
									

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
								</div>
							</div>
							</div>
						</div>
				<br/>
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
@push('script')
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
									<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>
									<script type="text/javascript">
									$('.cari').select2({
										placeholder: 'Username...',
										ajax: {
										url: '/order/load',
										dataType: 'json',
										delay: 250,
										processResults: function (data) {
											return {
											results:  $.map(data, function (item) {
												return {
												text: item.username,
												id: item.id
												}
											})
											};
										},
										cache: true
										}
									});

									</script>
									

@endpush