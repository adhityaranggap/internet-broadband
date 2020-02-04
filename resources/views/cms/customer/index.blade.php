@extends('layouts.mainlayout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Customer</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

			<div class="card-body">
				
				<h3>Data customer</h3>

				<!-- <p>Cari Data customer :</p> -->

				<div class="form-group">
					
				</div>
					<div class="row">
						<div class="col-6">
					<!-- <form action="/customer/cari" method="GET" class="form-inline">
								<input class="form-control" type="text" name="cari" placeholder="Cari customer .." value="">
								<input class="btn btn-primary ml-3" type="submit" value="CARI">
							</form> -->
							</div>
						
						<div class="col-6">
							<a href="{{ route('customer-create') }}" class="btn btn-primary float-right modal-show" title="Tambah Customer">Tambah Customer</a>
						</div>
				<br/>
				<br/>

				<table class="table table-bordered">
					<thead>
					<tr>
						<!-- <th>ID</th> -->
						<th>Nama</th>
						<th>Username</th>
						<th>Contact Person</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					</thead>
					
					@foreach($customers as $p)
					<tr>
						<!-- <td>{{ $p->id }}</td> -->
						<td>{{ $p->nama }}</td>
						<td>{{ $p->username }}</td>
						<td>{{ $p->contact_person }}</td>
						<td>{{ $p->alamat }}</td>
						<td>
							<a class="btn btn-warning btn-sm mt-2 modal-show edit" title="Edit Customer" href="/customer/edit/{{ $p->id }}">Edit</a>
							<a class="btn btn-danger btn-sm mt-2 btn-delete" href="/customer/hapus/{{ $p->id }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $customers->currentPage() }} <br/>
				Jumlah Data : {{ $customers->total() }} <br/>
				Data Per Halaman : {{ $customers->perPage() }} <br/>
				<br/>

				{{ $customers->links() }}
			</div>
		@include('layouts.modal')
@endsection
@push('script')
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
		<!-- <script src="{{ asset('js/modal.js') }}"></script>  -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>		
		<!-- <script>
			$(document).ready(function(){

			fetch_customer_data();

			function fetch_customer_data(query = '')
			{
			$.ajax({
			url:"{{ route('customer-cari') }}",
			method:'GET',
			data:{query:query},
			dataType:'json',
			success:function(data)
			{
				$('tbody').html(data.table_data);
				$('#total_records').text(data.total_data);
			}
			})
			}

			$(document).on('keyup', '#search', function(){
			var query = $(this).val();
			fetch_customer_data(query);
			});
			});
		</script> -->
	<!-- <script>
	
	function load_customer(username)
	{
		$.ajax({
			url: '',
			method: 'GET',
			data: {'username':username},
			async: false,
			success:function(data)
			{
				$('#list_customer').empty().html(data);
			}
		});
	}	

	$('#search_customer').keyup(function(){
		var search = $(this).val()
		if($search != '')
		{
			load_customer(search);
		}else{
			load_customer()
		}
	});
	</script> -->
@endpush

<!-- 
@push('css')	
	
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endpush -->