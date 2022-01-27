<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pemesanan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Anda" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Anda" required>
                            </div>
                        </div>
						  <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Nama Wisata</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="nama_wisata" class="form-control">
                                    <option value="1">Pantai</option>
                                    <option value="2">Pulau</option>
                                    <option value="3">Gunung</option>
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jadwal_keberangkatan" class="col-sm-3 control-label">Jadwal Keberangkatan</label>
                            <div class="col-sm-3">
                                <input type="date" name="jadwal_keberangkatan" class="form-control" id="inputEmail3" placeholder="Inputkan Jadwal Keberangkatan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_pengunjung" class="col-sm-3 control-label">Jumlah Pengunjung</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_pengunjung"class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Pengunjung" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Pesanan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pemesanan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pemesanan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$nama_wisata=$_POST['nama_wisata'];
  $jadwal_keberangkatan=$_POST['jadwal_keberangkatan'];
	$jumlah_pengunjung=$_POST['jumlah_pengunjung'];

    if ($nama_wisata==1){
        $harga=35000;
    }else if($nama_wisata==2){
        $harga=40000;
    }else if($nama_wisata==3){
        $harga=50000;
    }

    $total_harga=$harga * $jumlah_pengunjung;
 
    //buat sql
    $sql="INSERT INTO pemesanan VALUES ('','$nama','$alamat','$nama_wisata','$jadwal_keberangkatan',
    '$jumlah_pengunjung','$total_harga')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Pemesanan Error");
    if ($query){
        echo "<script>window.location.assign('?page=pemesanan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
