<!-- {!! Form::open(array('route' => 'order-store','method'=>'PUT')) !!} -->
{!! Form::open([
    'route'     => ['customer-update', $customer->id],
    'method'    => 'post',    
]) !!}   
<!-- <form action="{{route('order-store')}}" method="POST"> -->
<!-- <form th:action="@{/order/store}" th:attr="data-url-base=@{/order/store}" method="POST"> -->

@CSRF

    <div class="form-group">
        <label for="Username">Username</label>
        <input class="form-control" name="username" type="text" value="{{$customer->username}}" id="Username">
    </div>
    <div class="form-group">
        <label for="Nama">Nama</label>
        <input class="form-control" name="nama" type="text" value="{{$customer->nama}}" id="Nama">
    </div>
    <div class="form-group">
        <label for="Contact Person">Contact Person</label>
        <input class="form-control" name="contact_person" type="text" value="{{$customer->contact_person}}" id="contact_person">
    </div>
    <div class="form-group">
        <label for="Alamat">Alamat</label>
        <input class="form-control" name="alamat" type="text" value="{{$customer->alamat}}" id="contact_person">
    </div>
   
{!! Form::close() !!}
<!-- </form> -->


