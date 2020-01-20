<!-- {!! Form::open(array('route' => 'order-store','method'=>'PUT')) !!} -->
{!! Form::open([
    'route'     => ['customer-update', $customer->id],
    'method'    => 'post',    
]) !!}   
<!-- <form action="{{route('order-store')}}" method="POST"> -->
<!-- <form th:action="@{/order/store}" th:attr="data-url-base=@{/order/store}" method="POST"> -->

@CSRF

    <div class="form-group">
        <!-- <label for="username">Username</label> -->
        <!-- {{ Form::label("Username", $customer->username, ['class' => 'control-label']) }}
        {{ Form::label("Nama", $customer->nama, ['class' => 'control-label']) }}
        {{ Form::label("contact_person", $customer->contact_person, ['class' => 'control-label']) }}
        {{ Form::label("alamat", $customer->alamat, ['class' => 'control-label']) }}
        {{ Form::label("router_id", $customer->router_id, ['class' => 'control-label']) }} -->

        <!-- <select class="cari form-control" name="customer_has_package_id" id="username"></select> -->
        <!-- {!! Form::select("customer_has_package_id",[],null,["class"=>"cari form-control" ,'style'=>'width:100%']) !!} -->

    </div>

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


