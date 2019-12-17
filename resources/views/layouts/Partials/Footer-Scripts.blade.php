
<!-- Bootstrap core JavaScript-->
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
												text: item.username,
												id: item.id
												}
											})
											};
										},
										cache: true
										}
									});

									</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="{{ asset('vendor/sb-admin2/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/sb-admin2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/sb-admin2/vendor/jquery-easing/jquery.easing.min.js')}}"></script>


  <!-- Custom scripts for all pages-->
  <script src="{{ asset('vendor/sb-admin2/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('vendor/sb-admin2/vendor/chart.js/Chart.min.js')}}"></script>


  <!-- Page level custom scripts -->
  <script src="{{ asset('vendor/sb-admin2/js/demo/chart-area-demo.js')}}"></script>

  <script src="{{ asset('vendor/sb-admin2/js/demo/chart-pie-demo.js')}}"></script>
