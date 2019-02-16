<div class="main-panel">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">BUAT PINJAMAN</a>
			</div>
		</div>
	</nav>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					<?php include 'modul/action.php'; ?>

					<div class="card">
						<div class="header">
							<h4 class="title">Form Pinjaman</h4>
						</div>
						<div class="content">

							<div class="row">
								<div class="col-md-12">
									<form method="POST" action="" enctype="multipart/form-data">
										<div class="form-group">
											<label>Nomor Nasabah</label>
											<select class="form-control" name="nik" required>
												<option value="">--Silahkan Pilih--</option>
												<?php
												$sql = $konek->query("select * from tb_nasabah");
												while ($data_nasabah = $sql->fetch_array(MYSQLI_BOTH)) {
													?>
													<option value="<?php echo $data_nasabah['nik']; ?>">
														<?php echo $data_nasabah['nik']."&nbsp;&nbsp;|&nbsp;&nbsp;".$data_nasabah['nama']; ?>
													</option>
												<?php } ?>
											</select>

										</div>

										<div class="form-group">
											<label>Tanggal Pinjam</label>
											<input type="date" class="form-control border-input"  name="tgl" id="datepicker2" placeholder="Tanggal Pinjam" required />
										</div>
										<div class="form-group">
											<label>Jumlah Pinjaman</label>
											<input type="text" class="form-control border-input" name="jumlah_pinjaman" required>
										</div>
										<div class="form-group">
											<label>Jangka Waktu</label>
											<input type="text" class="form-control border-input" name="jangka_waktu" placeholder="Jangka Waktu" required>
										</div>
										<div class="form-group">
											<label>Bunga</label>
											<input type="text" class="form-control border-input" name="bunga" placeholder="Bunga" required>
										</div>

										<button type="submit" name="tambah_pinjaman" class="btn btn-info btn-fill btn-wd">Tambah</button>
										<a href="index.php?page=data-pinjaman" class="btn btn-danger btn-fill btn-wd">Kembali</a>
									</form>
								</div>
							</div>

						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>