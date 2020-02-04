{!! Form::open([
    'route'     => ['customer-update', $customer->id],
    'method'    => 'post',    
]) !!}   

    <div class="form-group">
        <label for="Username">Username</label>
        <input class="form-control" name="username" type="text" value="{{$customer->username}}" id="username">
    </div>
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input class="form-control" name="nama" type="text" value="{{$customer->nama}}" id="nama">
    </div>
    <div class="form-group">
        <label for="Contact Person">Contact Person</label>
        <input class="form-control" name="contact_person" type="text" value="{{$customer->contact_person}}" id="contact_person">
    </div>
    <div class="form-group">
        <label for="Alamat">Alamat</label>
        <input class="form-control" name="alamat" type="text" value="{{$customer->alamat}}" id="alamat">
    </div>
   
{!! Form::close() !!}
