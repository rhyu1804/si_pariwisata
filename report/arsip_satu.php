<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pemesanan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM pemesanan WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pariwisata dan Traveller </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA Pemesanan</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nama</td> <td><?= $data['Nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td> <td><?= $data['Alamat'] ?></td>
                                </tr>
								<tr>
                                    <td>Nama Wisata</td> <td><?= $data['Nama_Wisata'] ?></td>
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
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
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