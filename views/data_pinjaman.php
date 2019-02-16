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
					<div class="card card-plain">
						<div class="header">
							<h4 class="title" style="text-align: right;"><a href="index.php?page=tambah-pinjaman&subpage=tambah" class="btn btn-sm btn-success btn-icon"><i class="ti-plus"></i>&nbsp;Buat Pinjaman</a></h4>

						</div>
						<div class="content table-responsive table-full-width">
							<table class="table table-hover">
								<thead>
									<th>NO NASABAH</th>
									<th>NAMA NASABAH</th>
									<th>TANGGAL PINJAMAN</th>
									<th>JUMLAH PINJAMAN</th>
									<th>JANGKA WAKTU</th>
									<th>BUNGA</th>
									<th>ACTION</th>
								</thead>
								<tbody>
									<?php
									$sql = $konek->query("SELECT * FROM tb_nasabah JOIN tb_data_pinjaman ON tb_nasabah.nik = tb_data_pinjaman.nik ");
									while ($data_pinjaman = $sql->fetch_array(MYSQLI_BOTH)) {
										
										?>

										<tr>
											<td>
												<a href="index.php?page=detail-pinjaman&id=<?php echo $data_pinjaman['id']; ?>"><?php echo $data_pinjaman['nik']; ?></a>
											</td>
											<td>
												<a href="index.php?page=detail-pinjaman&id=<?php echo $data_pinjaman['id']; ?>"><?php echo $data_pinjaman['nama']; ?></a>
											</td>
											<td>
												<a href="index.php?page=detail-pinjaman&id=<?php echo $data_pinjaman['id']; ?>"><?php echo $data_pinjaman['tgl']; ?></a>
											</td>
											<td>
												<a href="index.php?page=detail-pinjaman&id=<?php echo $data_pinjaman['id']; ?>"><?php echo rupiah($data_pinjaman['jumlah_pinjaman']); ?></a>
											</td>
											<td>
												<a href="index.php?page=detail-pinjaman&id=<?php echo $data_pinjaman['id']; ?>"><?php echo $data_pinjaman['jangka_waktu']." bulan"; ?></a>
											</td>
											<td>
												<a href="index.php?page=detail-pinjaman&id=<?php echo $data_pinjaman['id']; ?>"><?php echo $data_pinjaman['bunga']."%"; ?></a>
											</td>
											<td>
												<a href="modul/action.php?id=<?php echo $data_pinjaman['id']; ?>" class="btn btn-sm btn-danger btn-icon">&nbsp;<i class="ti-trash"></i>&nbsp;</a>
											</td>
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