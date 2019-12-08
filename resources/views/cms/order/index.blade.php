@extends('layouts.mainlayout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Order</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<div class="card-body">
<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h3 class="text-left"><a href="{{route('customer-index')}}">Kembali</a></h3>
				<h5 class="text-left my-4">Daftar Order</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Username</th>
							<th>Package</th>
							<!-- <th width="1%">Jumlah</th> -->
						</tr>
					</thead>
					<tbody>
						@foreach($customers as $a)
						<tr>
							<td>{{ $a->username }}</td>
							<td>
								<ul>
									@foreach($a->package as $h)
									<li> {{ $h->package }} </li>
									@endforeach
								</ul>
							</td>
							<!-- <td class="text-center">{{ $a->hadiah->count() }}</td> -->
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
				
				

@endsection