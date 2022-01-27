<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pembayaran</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pembayaran WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>Id</td> <td><?= $data['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Bank</td> <td><?= $data['nama_bank'] ?></td>
                        </tr>
						<tr>
                            <td>Pembayaran</td> <td><?= $data['pembayaran'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pembayaran&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pembayaran </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

