
{!! Form::open([
    'route'     => 'order-store',
    'method'    => 'post',    
]) !!}   

@CSRF

    <div class="form-group">
        {{ Form::label("Username", null, ['class' => 'control-label']) }}
        {!! Form::select("customer_has_package_id",[],null,["class"=>"cari form-control" ,'style'=>'width:100%']) !!}
    </div>

    <div class="form-group">
        <label for="period">Periode</label>
        <input class="form-control" name="period" type="month" value="{{ now()->format('Y-m') }}" id="Period">
    </div>
    <div class="form-group">
        <label for="type">Metode Pembayaran</label>
        <select class="form-control" id="type" name="type">
            <option value="" selected hidden>--Pilih Metode Pembayaran--</option>
            <option value="BCA">Bank Transfer BCA</option>
            <option value="CASH">Cash</option>
            <option value="OVO">OVO</option>
            <option value="DANA">DANA</option>
            <option value="GOPAY">GOPAY</option>
        </select>
    </div>

    <div class="form-group">
        <label for="paymentdate">Tanggal Bayar</labssel>
        <input class="form-control" name="paymentdate" type="date" value="{{ now()->format('Y-m-d') }}" id="paymentdate">
    </div>

    <div class="form-group">
        <label for="file">File Payment</label>
        <input type="file" name="berkas" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">Upload Bukti Pembayaran Diterima</small>
    </div>

    <div class="form-group">
        <label for="notes">Notes</label>
        <textarea class="form-control" name="notes" placeholder="Tambah Note"></textarea>
    </div>
{!! Form::close() !!}


<script type="text/javascript">
	$('.cari').select2({
		placeholder: 'Username...',
		ajax: {
        // headers: {
        //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        // }
        url: '/order/load',
        dataType: 'json',
		delay: 250,
		processResults: function (data) {
			return {
			results:  $.map(data, function (item) {
				return {
                text: item.username + ' | ' + item.nama_paket,
				id: item.id
				}
			})
			};
		},
        
		cache: true
		}
	});

	</script>