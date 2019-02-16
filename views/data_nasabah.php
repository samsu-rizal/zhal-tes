<div class="main-panel">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">DATA NASABAH</a>
			</div>
		</div>
	</nav>

	<div class="content">
		<div class="container-fluid">
			<div class="row">

				<div class="col-md-12">
					<div class="card card-plain">
						<div class="header">
							<h4 class="title" style="text-align: right;"><a href="index.php?page=tambah-nasabah&subpage=tambah" class="btn btn-sm btn-success btn-icon"><i class="ti-plus"></i>&nbsp;Tambah Data</a></h4>

						</div>
						<div class="content table-responsive table-full-width">
							<table class="table table-hover">
								<thead>
									<th>NO</th>
									<th>NAMA NASABAH</th>
									<th>ALAMAT</th>
									<th>TELP/HP</th>
									<th>EMAIL</th>
									<th>TEMPAT</th>
									<th>NO. REKENING</th>
									<th>ACTION</th>
								</thead>
								<tbody>
									<?php
									$sql = $konek->query("select * from tb_nasabah");
									while ($data_nasabah = $sql->fetch_array(MYSQLI_BOTH)) {
										?>
										<tr>
											<td><?php echo $data_nasabah['nik']; ?></td>
											<td><?php echo $data_nasabah['nama']; ?></td>
											<td><?php echo $data_nasabah['alamat']; ?></td>
											<td><?php echo $data_nasabah['hp']; ?></td>
											<td><?php echo $data_nasabah['email']; ?></td>
											<td><?php echo $data_nasabah['tempat']; ?></td>
											<td><?php echo $data_nasabah['no_rek']; ?></td>
											<td>
												<a href="index.php?page=tambah-nasabah&subpage=edit&nik=<?php echo $data_nasabah['nik']; ?>" class="btn btn-sm btn-alert btn-icon">&nbsp;<i class="ti-pencil"></i>&nbsp;</a>
												<a href="modul/action.php?nomor=<?php echo $data_nasabah['nik']; ?>" class="btn btn-sm btn-danger btn-icon">&nbsp;<i class="ti-trash"></i>&nbsp;</a>
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