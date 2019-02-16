<?php
$id = $_GET['id'];
$sql = $konek->query("SELECT * FROM tb_nasabah JOIN tb_data_pinjaman ON tb_nasabah.nik = tb_data_pinjaman.nik where id='$id'");

?>

<div class="main-panel">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">DATA PINJAMAN</a>
			</div>
		</div>
	</nav>

	<div class="content">
		<div class="container-fluid">
			<div class="row">

				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h3 class="title">Detail Pinjaman Nasabah</h3>
							<p class="category"><br>
								<?php
								while ($data_pinjaman = $sql->fetch_array(MYSQLI_BOTH)) {

									$jumlah_pinjaman 	= $data_pinjaman['jumlah_pinjaman'];
									$jangka_waktu		= $data_pinjaman['jangka_waktu'];
									$bunga 				= $data_pinjaman['bunga'];

									$ap			= round($jumlah_pinjaman / $jangka_waktu);
									$bunga_rp 	= round($ap * $jangka_waktu / 100);
									$perbulan 	= round($ap + $bunga_rp);

									?>

									<table>
										<tr>
											<td>Nik</td>
											<td>&nbsp;&nbsp;: <?php echo $data_pinjaman['nik']; ?></td>
										</tr>
										<tr>
											<td>Nama</td>
											<td>&nbsp;&nbsp;: <?php echo $data_pinjaman['nama']; ?></td>
										</tr>
										<tr>
											<td>Alamat</td>
											<td>&nbsp;&nbsp;: <?php echo $data_pinjaman['alamat']; ?></td>
										</tr>
										<tr>
											<td>Tanggal Pinjaman</td>
											<td>&nbsp;&nbsp;: <?php echo $data_pinjaman['tgl']; ?></td>
										</tr>
										<tr>
											<td>Jumlah Pinjaman</td>
											<td>&nbsp;&nbsp;: <?php echo rupiah($jumlah_pinjaman); ?></td>
										</tr>
										<tr>
											<td>Jangka Waktu</td>
											<td>&nbsp;&nbsp;: <?php echo $jangka_waktu; ?> Bulan</td>
										</tr>
										<tr>
											<td>Bunga</td>
											<td>&nbsp;&nbsp;: <?php echo $bunga; ?>%</td>
										</tr>
									</table>

								<?php } ?>
							</p>
						</div>
						<div class="content table-responsive table-full-width">
							<table class="table table-striped">
								<thead>
									<th>BULAN</th>
									<th>ANGSURAN POKOK</th>
									<th>BUNGA</th>
									<th>TOTAL</th>
								</thead>
								<tbody>
									<?php  for ($x = 1; $x <= $jangka_waktu; $x++) { ?>
										<tr>
											<td><?php echo $x; ?></td>
											<td><?php echo rupiah($ap); ?></td>
											<td><?php echo rupiah($bunga_rp); ?></td>
											<td><?php echo rupiah($perbulan); ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>