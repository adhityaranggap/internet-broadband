{!! Form::open([
    'route'     => ['customer-store'],
    'method'    => 'post',    
]) !!}   

@CSRF


    <div class="form-group">
        <label for="Username">Username</label>
        <input class="form-control" name="username" type="text" value="" id="Username">
    </div>
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input class="form-control" name="nama" type="text" value="" id="Nama">
    </div>
    <div class="form-group">
        <label for="Contact Person">Contact Person</label>
        <input class="form-control" name="contact_person" type="text" value="" id="contact_person">
    </div>
    <div class="form-group">
        <label for="Alamat">Alamat</label>
        <input class="form-control" name="alamat" type="text" value="" id="contact_person">
    </div>
   
{!! Form::close() !!}


