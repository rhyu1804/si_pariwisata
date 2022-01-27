<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pemesanan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                        <div class="form-group">
                            <label for="id" class="col-sm-3 control-label">ID</label>
                            <div class="col-sm-9">
                                <input type="text" name="id" value="<?=$data['id']?>"class="form-control" id="inputEmail3" placeholder="ID">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="Nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama" value="<?=$data['Nama']?>"class="form-control" id="inputEmail3" placeholder="Nama Anda">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="Alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="Alamat" value="<?=$data['Alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
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
							
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Jadwal Keberangkatan</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2022;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->           

                        <div class="form-group">
                            <label for="jumlah_pengunjung" class="col-sm-3 control-label">Jumlah Pengunjung</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_pengunjung" value="<?=$data['jumlah_pengunjung']?>" class="form-control" id="inputPassword3" placeholder="Jadwal Pengunjung">
                            </div>
                        </div>
                       
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pemesanan</button>
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
    $nama=$_POST['Nama'];
    $alamat=$_POST['Alamat'];
    $nama_wisata=$_POST['nama_wisata'];
  $jadwal_keberangkatan=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
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
    $sql="UPDATE pemesanan SET Nama='$nama',Alamat='$alamat',Nama_Wisata='$nama_wisata',jadwal_keberangkatan='$jadwal_keberangkatan',jumlah_pengunjung='$jumlah_pengunjung',Harga_Tiket='$total_harga' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pemesanan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>




