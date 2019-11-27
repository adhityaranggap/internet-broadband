<!DOCTYPE html>
<html>
<head>
	<title>Customer Internet Broadband</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				

				<h2 class="text-center"><a href=#>Customer Internet Broadband</a></h2>

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
						<th>Nama</th>
						<th>Username</th>
						<th>Contact Person</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					@foreach($users as $p)
					<tr>
						<td>{{ $p->nama }}</td>
						<td>{{ $p->username }}</td>
						<td>{{ $p->contact_person }}</td>
						<td>{{ $p->alamat }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/customer/edit/{{ $p->id }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/customer/hapus/{{ $p->id }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $users->currentPage() }} <br/>
				Jumlah Data : {{ $users->total() }} <br/>
				Data Per Halaman : {{ $users->perPage() }} <br/>
				<br/>

				{{ $users->links() }}
			</div>
		</div>
	</div>


</body>
</html>