<?php
if(isset($_POST['tambah_nasabah'])){

  /*----------------------End function-------------------------*/

  $nik      = $konek->real_escape_string($_POST['nik']);
  $nama     = $konek->real_escape_string($_POST['nama']);
  $alamat   = $konek->real_escape_string($_POST['alamat']);
  $hp       = $konek->real_escape_string($_POST['hp']);
  $email    = $konek->real_escape_string($_POST['email']);
  $tempat   = $konek->real_escape_string($_POST['tempat']);
  $no_rek   = $konek->real_escape_string($_POST['no_rek']);

  $sql      = "select * from tb_nasabah where nik = '$nik'";
  $result   = $konek->query($sql) or die('Something Wrong : '.$konek->error);


  if ($result->num_rows == 1){

    ?>
    <div class="alert alert-danger">
      <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
      <strong>Gagal!</strong> No Nasabah sudah terdaftar.
    </div>
    <?php

  }else{


    $result1  =mysqli_query($konek, "insert into tb_nasabah values('$nik','$nama','$alamat','$hp','$email','$tempat','$no_rek')");

    if($result1){
      ?>
      <div class="alert alert-success">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
        <strong>Successfully!</strong> Berhasil ditambahkan.
      </div>
      <?php
    }else{
      ?>
      <div class="alert alert-danger">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
        <strong>Gagal!</strong> Failed, Please check connection to server.
      </div>
      <?php
    }
  }

}elseif(isset($_POST['update_nasabah'])){

  /*----------------------End function-------------------------*/

  $nik      = $konek->real_escape_string($_GET['nik']);
  $nama     = $konek->real_escape_string($_POST['nama']);
  $alamat   = $konek->real_escape_string($_POST['alamat']);
  $hp       = $konek->real_escape_string($_POST['hp']);
  $email    = $konek->real_escape_string($_POST['email']);
  $tempat   = $konek->real_escape_string($_POST['tempat']);
  $no_rek   = $konek->real_escape_string($_POST['no_rek']);

  $result  = mysqli_query($konek, "UPDATE tb_nasabah SET nama='$nama', alamat='$alamat', hp='$hp', email='$email', tempat='$tempat', no_rek='$no_rek' where nik='$nik'");

  if($result){
    ?>
    <div class="alert alert-success">
      <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
      <strong>Successfully!</strong> Berhasil di update.
    </div>
    <?php
  }else{
    ?>
    <div class="alert alert-danger">
      <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
      <strong>Gagal!</strong> Failed, Please check connection to server.
    </div>
    <?php
  }
  

}elseif(isset($_POST['tambah_pinjaman'])){

  /*----------------------End function-------------------------*/

  $nik              = $konek->real_escape_string($_POST['nik']);
  $tgl              = $konek->real_escape_string($_POST['tgl']);
  $jumlah_pinjaman  = $konek->real_escape_string($_POST['jumlah_pinjaman']);
  $jangka_waktu     = $konek->real_escape_string($_POST['jangka_waktu']);
  $bunga            = $konek->real_escape_string($_POST['bunga']);

  $sql      = "select * from tb_nasabah where nik = '$nik'";
  $result   = $konek->query($sql) or die('Something Wrong : '.$konek->error);

  if ($result->num_rows < 1){

    ?>
    <div class="alert alert-danger">
      <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
      <strong>Gagal!</strong> No Nasabah belum terdaftar.
    </div>
    <?php

  }else{

    $result1  =mysqli_query($konek, "insert into tb_data_pinjaman values('','$nik','$tgl','$jumlah_pinjaman','$jangka_waktu','$bunga')");

    if($result1){
      ?>
      <div class="alert alert-success">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
        <strong>Successfully!</strong> Berhasil ditambahkan.
      </div>
      <?php
    }else{
      ?>
      <div class="alert alert-danger">
        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
        <strong>Gagal!</strong> Failed, Please check connection to server.
      </div>
      <?php
    }
  }

}elseif(isset($_GET['nomor'])!=""){
  include 'db.php';
  $nik = $_GET['nomor'];

  $sqlquery = mysqli_query($konek, "delete from tb_nasabah where nik='$nik'") or die(mysqli_error());
  if ($sqlquery) {
    header('location:../index.php?page=data-nasabah');

  }
}elseif(isset($_GET['id'])!=""){
  include 'db.php';
  $id = $_GET['id'];

  $sqlquery = mysqli_query($konek, "delete from tb_data_pinjaman where id='$id'") or die(mysqli_error());
  if ($sqlquery) {
    header('location:../index.php?page=data-pinjaman');

  }
}


