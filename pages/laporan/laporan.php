<?php
// error_reporting(0);
include '../../model/Db.php';
$db = new Db();


?>
<!DOCTYPE html>
<html>

<head>
    <title>Sistem Pendukung Keputusan Topsis</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->

    <link rel="stylesheet" href="../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../assets/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
</head>

<body onload="window.print()">
    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col-md-3">
                <img style="width: 100%;" src="../../../assets/sdn.png" alt="No Images">
            </div>
            <div class="col-md-9">
                <h2>Sistem Pendukung Keputusan Topsis</h2>
                <p>
                    Undang Mereka Ke Pernikahan Mu
                    <br>
                    <span class="text-bold">
                        Jalan Siti Manggopoh, Desa Manggung, Kec. Pariaman Utara, Manggung, Pariaman Utara, Kota Pariaman, Sumatera Barat 25522
                    </span>
                    <br>
                    <span class="text-bold">No Hp : 0812-6606-3658</span>
                </p>
            </div>
        </div>
        <h2 class="text-center">Laporan Produk</h2>
        <table class="mt-3 table table-bordered">
            <tr>
                <th width="5px">No</th>
                <th>Kategori</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
            <?php foreach ($db->getAllProduk() as $no => $row) :   ?>
                <tr>
                    <td><?= ++$no ?></td>
                    <td><?= $row->kategori_nama ?></td>
                    <td><?= $row->produk_nama ?></td>
                    <td><?= rupiah($row->produk_harga) ?></td>
                    <td><?= format_angka($row->produk_stok) ?></td>
                </tr>
            <?php endforeach ?>
        </table>

        <div class="float-right mt-5">
            <p>.............. , <?= tgl_indo(date('Y-m-d')) ?></p>
            <br>
            <h6 class="mt-5 text-center">Pimpinan</h6>
        </div>
    </div>
    <!-- ./wrapper -->
</body>

</html>