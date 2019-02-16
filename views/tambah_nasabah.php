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

					<?php include 'modul/action.php'; ?>

					<div class="card">
						<div class="header">
							<h4 class="title">Data Nasabah</h4>
						</div>
						<div class="content">

							<?php
							if(isset($_GET['subpage'])){
								if($_GET['subpage']=="tambah"){
									?>

									<div class="row">
										<div class="col-md-12">
											<form method="POST" action="" enctype="multipart/form-data">
												<div class="form-group">
													<label>Nomor Nasabah</label>
													<input type="text" class="form-control border-input" name="nik" placeholder="Nomor Nasabah" required>
												</div>
												<div class="form-group">
													<label>Nama Lengkap</label>
													<input type="text" class="form-control border-input" name="nama" placeholder="Nama Lengkap" required>
												</div>
												<div class="form-group">
													<label>Alamat Nasabah</label>
													<input type="text" class="form-control border-input" name="alamat" placeholder="Alamat Nasabah">
												</div>
												<div class="form-group">
													<label>Telp / HP</label>
													<input type="text" class="form-control border-input" name="hp" placeholder="Telp / HP">
												</div>
												<div class="form-group">
													<label>Email</label>
													<input type="email" class="form-control border-input" name="email" placeholder="Email">
												</div>
												<div class="form-group">
													<label>Tempat</label>
													<input type="text" class="form-control border-input" name="tempat" placeholder="Tempat">
												</div>
												<div class="form-group">
													<label>Nomor Rekening</label>
													<input type="text" class="form-control border-input" name="no_rek" placeholder="Nomor Rekening">
												</div>

												<button type="submit" name="tambah_nasabah" class="btn btn-info btn-fill btn-wd">Tambah</button>
												<a href="index.php?page=data-nasabah" class="btn btn-danger btn-fill btn-wd">Kembali</a>
											</form>
										</div>
									</div>

									<?php
								}elseif($_GET['subpage']=="edit"){

									$nik = $_GET['nik'];
									$sql = $konek->query("select * from tb_nasabah where nik='$nik'");
									while ($data_nasabah = $sql->fetch_array(MYSQLI_BOTH)) {
										?>

										<div class="row">
											<div class="col-md-12">
												<form method="POST" action="" enctype="multipart/form-data">
													<div class="form-group">
														<label>Nomor Nasabah</label>
														<input type="text" class="form-control border-input" name="nik1" value="<?php echo $data_nasabah['nik']; ?>" disabled>

														<input type="hidden" class="form-control border-input" name="nik" value="<?php echo $data_nasabah['nik']; ?>">
													</div>
													<div class="form-group">
														<label>Nama Lengkap</label>
														<input type="text" class="form-control border-input" name="nama" value="<?php echo $data_nasabah['nama']; ?>" required>
													</div>
													<div class="form-group">
														<label>Alamat Nasabah</label>
														<input type="text" class="form-control border-input" name="alamat" value="<?php echo $data_nasabah['alamat']; ?>">
													</div>
													<div class="form-group">
														<label>Telp / HP</label>
														<input type="text" class="form-control border-input" name="hp" value="<?php echo $data_nasabah['hp']; ?>">
													</div>
													<div class="form-group">
														<label>Email</label>
														<input type="email" class="form-control border-input" name="email" value="<?php echo $data_nasabah['email']; ?>">
													</div>
													<div class="form-group">
														<label>Tempat</label>
														<input type="text" class="form-control border-input" name="tempat" value="<?php echo $data_nasabah['tempat']; ?>">
													</div>
													<div class="form-group">
														<label>Nomor Rekening</label>
														<input type="text" class="form-control border-input" name="no_rek" value="<?php echo $data_nasabah['no_rek']; ?>">
													</div>

													<button type="submit" name="update_nasabah" class="btn btn-info btn-fill btn-wd">Update</button>
													<a href="index.php?page=data-nasabah" class="btn btn-danger btn-fill btn-wd">Kembali</a>
												</form>
											</div>
										</div>
									<?php } } } ?>
								</div>					
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>