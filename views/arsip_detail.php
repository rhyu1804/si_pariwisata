<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pemesanan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pemesanan WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);

                     if ($data['Nama_Wisata']==1){
                                    $nama_wisata="Pantai";
                                }else if($data['Nama_Wisata']==2){
                                    $nama_wisata="Pulau";
                                }else if($data['Nama_Wisata']==3){
                                    $nama_wisata="Gunung";
                                } 
                    
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>ID</td> <td><?= $data['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td> <td><?= $data['Nama'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat</td> <td><?= $data['Alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Wisata</td> <td><?= $nama_wisata ?></td>
                        </tr>
                        <tr>
                            <td>Jadwal Keberangkatan</td> <td><?= $data['jadwal_keberangkatan'] ?></td>
                        </tr>
						<tr>
                            <td>Jumlah Pengunjung</td> <td><?= $data['jumlah_pengunjung'] ?></td>
                        </tr>
						<tr>
                            <td>Harga Tiket</td> <td><?= $data['Harga_Tiket'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pemesanan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pemesanan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

