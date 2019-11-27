<!DOCTYPE html>
<html>
<head>
	<title>Edit Customer</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="container">
		<div class="card">
			<div class="card-body">
				
            <h2 class="text-center"><a href="#">Customer Internet Broadband</a></h2>

            <h3 class="text-left">Edit Customer</h3>
            <div class="form-group">
					
            </div>
            <a href="/customer"> Kembali</a>
            
            <br/>
            <br/>

            @foreach($users as $u)
            <form action="/customer/update" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $u->id }}"> <br/>
                Nama <input type="text" class="form-control" required="required" name="nama" value="{{ $u->nama }}"> <br/>
                Username <input type="text" class="form-control" required="required" name="username" value="{{ $u->username }}"> <br/>
                Contact Person <input type="number" class="form-control" required="required" name="contact_person" value="{{ $u->contact_person }}"> <br/>
                Alamat <textarea required="required" class="form-control" name="alamat">{{ $u->alamat }}</textarea> <br/>
                <input type="submit" class="btn btn-primary ml-3" value="Simpan Data">
            </form>
            @endforeach
          </div>
	    </div>
	</div>

</body>
</html>