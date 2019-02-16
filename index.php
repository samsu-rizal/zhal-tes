<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Koperasi Mantap Jaya</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<link href="assets/bootstrap.min.css" rel="stylesheet" />

	<link href="assets/menu.css" rel="stylesheet"/>

	<link href="assets/themify/themify-icons.css" rel="stylesheet">

	<script src="assets/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/menu.js"></script>

	<script src="assets/ui/jquery.ui.core.js"></script>
	<script src="assets/ui/jquery.ui.widget.js"></script>
	<script src="assets/ui/jquery.ui.datepicker.js"></script>
	<script>
		$(function() {
			$( "#datepicker2" ).datepicker({
				changeMonth: true,
				changeYear: true
			});
		});
	</script>

</head>
<body>

	<div class="wrapper">
		<div class="sidebar" data-background-color="white" data-active-color="danger">

			<div class="sidebar-wrapper">
				<div class="logo">
					<a href="index.html" class="simple-text">
						KOPERASI
					</a>
				</div>

				<ul class="nav">
					<li <?php if(!isset($_GET['page']) || $_GET['page']=="data-nasabah") echo "class='active'";?>>
						<a href="index.php?page=data-nasabah">
							<i class="ti-user"></i>
							<p>Data Nasabah</p>
						</a>
					</li>
					<li <?php if(!isset($_GET['page']) || $_GET['page']=="data-pinjaman") echo "class='active'";?>>
						<a href="index.php?page=data-pinjaman">
							<i class="ti-user"></i>
							<p>Data Pinjaman</p>
						</a>
					</li>
				</ul>
			</div>
		</div>


		<?php
		function rupiah($angka){

			$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
			return $hasil_rupiah;

		}
		include 'modul/db.php';

		if(isset($_GET['page']))
		{
			if($_GET['page']=="data-nasabah"){
				require "views/data_nasabah.php";

			}elseif($_GET['page']=="data-pinjaman"){
				require "views/data_pinjaman.php";

			}elseif($_GET['page']=="cetak-laporan"){
				require "views/cetak_laporan.php";

			}elseif($_GET['page']=="tambah-nasabah"){
				require "views/tambah_nasabah.php";

			}elseif($_GET['page']=="tambah-pinjaman"){
				require "views/tambah_pinjaman.php";

			}elseif($_GET['page']=="detail-pinjaman"){
				require "views/detail_pinjaman.php";

			}else{
				require "views/error.php";
			}
		}else{
			require "views/dashboard.php";
		}
		?>

	</div>

</body>


<script type="text/javascript">

	var rupiah = document.getElementById('rupiah');
	rupiah.addEventListener('keyup', function(e){
		rupiah.value = formatRupiah(this.value, 'Rp. ');
	});

	function formatRupiah(angka, prefix){
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
		split   		= number_string.split(','),
		sisa     		= split[0].length % 3,
		rupiah     		= split[0].substr(0, sisa),
		ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

		if(ribuan){
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
</script>

</html>
