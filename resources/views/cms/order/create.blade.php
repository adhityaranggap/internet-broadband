<form action="{{route('order-store')}}" method="POST">
@CSRF
    <div class="form-group">
        <label for="username">Username</label>
        <select class="cari form-control" name="customer_has_package_id" id="username"></select>
    </div>

    <div class="form-group">
        <label for="period">Periode</label>
        <input class="form-control" name="period" type="month" value="2020-01" id="Period">
    </div>
    <div class="form-group">
        <label for="type">Metode Pembayaran</label>
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
        <input class="form-control" name="paymentdate" type="date" value="2020-01-01" id="paymentdate">
    </div>
    <div class="form-group">
        <label for="file">File Payment</label>
        <input type="file" name="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">Upload Bukti Pembayaran Diterima</small>
    </div>

</form>



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