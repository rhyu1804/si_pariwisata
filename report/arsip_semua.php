<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Pemesanan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pariwisata dan Traveller </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA SELURUH PEMESANAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>ID</th><th>Nama</th><th>Alamat</th><th>Nama Wisata</th><th>Jadwal Keberangkatan</th><th>Jumlah Pengunjung</th><th>Harga Tiket</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM pemesanan";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                               if ($data['Nama_Wisata']==1){
                                    $nama_wisata="Pantai";
                                }else if($data['Nama_Wisata']==2){
                                    $nama_wisata="Pulau";
                                }else if($data['Nama_Wisata']==3){
                                    $nama_wisata="Gunung";
                                } 

                                ?>
                                <tr>
                                    <td><?= $data['id'] ?></td>
                                    <td><?= $data['Nama'] ?></td>
                                    <td><?= $data['Alamat'] ?></td>
                                    <td><?= $nama_wisata ?></td>
                                    <td><?= $data['jadwal_keberangkatan'] ?></td>
                                    <td><?= $data['jumlah_pengunjung'] ?></td>
                                    <td><?= $data['Harga_Tiket'] ?></td>
                                    <td>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>STMIK Royal Kisaran<strong></u><br>
                                        
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>