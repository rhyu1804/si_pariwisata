<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Pembayaran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id" class="col-sm-3 control-label">ID</label>
                             <div class="col-sm-9">
                                <input type="text" name="id" value="<?=$data['id']?>"class="form-control" id="inputEmail3" placeholder="ID" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_bank" class="col-sm-3 control-label">Nama Bank</label>
                             <div class="col-sm-9">
								<input type="text" name="nama_bank" value="<?=$data['nama_bank']?>"class="form-control" id="inputEmail3" placeholder="Nama Bank">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pembayaran" class="col-sm-3 control-label">Pembayaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="pembayaran" value="<?=$data['pembayaran']?>"class="form-control" id="inputEmail3" placeholder="Pembayaran">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pembayaran</button>
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
    $nama_bank=$_POST['nama_bank'];
    $pembayaran=$_POST['pembayaran'];
    //buat sql
    $sql="UPDATE pembayaran SET nama_bank = '$nama_bank', pembayaran='$pembayaran' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pembayaran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



