<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Pembayaran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="nama_bank" class="col-sm-3 control-label">Nama Bank</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_bank" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Bank Anda" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="pembayaran" class="col-sm-3 control-label">Pembayaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="pembayaran" class="form-control" id="inputEmail3" placeholder="Inputkan Nominal Pembayaran Anda" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Bayar</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pembayaran&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pembayaran
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $id=$_POST['id'];
	$nama_bank=$_POST['nama_bank'];
	$pembayaran=$_POST['pembayaran'];

    //buat sql
    $sql="INSERT INTO pembayaran VALUES ('id','$nama_bank','$pembayaran')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Pembayaran Error");
    if ($query){
        echo "<script>window.location.assign('?page=pembayaran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
