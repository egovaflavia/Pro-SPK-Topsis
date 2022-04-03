<?php
// error_reporting(0);
include 'model/Db.php';
$db = new Db();
if (empty($_SESSION['pengguna'])) {
    echo "<script>
  window.location='login.php';
  </script>";
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Sistem Pendukung Keputusan Topsis</title>
    <?php include 'components/head.php' ?>
</head>
<!--  -->

<body onload="window.print()" class="sidebar-collapse">
    <div class="container mb-5">

        <div class="row mt-5">
            <div class="col-md-2">
                <img src="assets/images/sdn.png" style="width: 60%;margin-left: auto;
    margin-right: auto;" alt="No Images">
            </div>
            <div class="col-md-10">
                <h2>Sistem Pendukung Keputusan </h2>
                <p>
                    Technique for Order of Preference by Similarity to Ideal Solution (TOPSIS)
                    <br>
                    <span class="text-bold">
                        Penjurusan Menggunakan Metode TOPSIS
                    </span>
                    <br>
                </p>
            </div>
            <div class="row mb-3 mt-5">
                <div class="col-md-12  justify-content-center">
                    <center>
                        <h2 class="text-center">Laporan Hasil Perhitungan</h2>
                    </center>
                    <p>Tahun Ajaran <?= $_GET['tahun'] ?></p>
                </div>
            </div>
            <div class="col-12">
                <?php
                $bobot = [];
                $dataKriterias = $db->getAllKriteria();
                foreach ($dataKriterias as $no => $dataKriteria) :
                    $bobot[] = $dataKriteria->kriteria_bobot;
                ?>
                <?php endforeach; ?>

                <h4>Alternative</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="10px" rowspan="2">No</th>
                            <th rowspan="2">Alternative</th>
                            <th colspan="6">Kriteria</th>
                        </tr>
                        <tr>
                            <th>C1</th>
                            <th>C2</th>
                            <th>C3</th>
                            <th>C4</th>
                            <th>C5</th>
                            <th>C6</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $alternative_nama = [];
                        foreach ($db->getRating() as $noKec => $dataRating) :
                            $alternative_nama[] = $dataRating->alternative_nama;
                        ?>
                            <tr>
                                <td><?= ++$noKec ?></td>
                                <td><?= $dataRating->alternative_nama ?></td>
                                <td><?= $dataRating->nilai_c1 ?></td>
                                <td><?= $dataRating->nilai_c2 ?></td>
                                <td><?= $dataRating->nilai_c3 ?></td>
                                <td><?= $dataRating->nilai_c4 ?></td>
                                <td><?= $dataRating->nilai_c5 ?></td>
                                <td><?= $dataRating->nilai_c6 ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

                <hr>

                <?php
                foreach ($db->getRating() as $noo => $dataRating) :
                ?>
                <?php endforeach ?>
                <?php
                $xx1 = null;
                $xx2 = null;
                $xx3 = null;
                $xx4 = null;
                $xx5 = null;
                $xx6 = null;
                foreach ($db->getRating() as $nooo => $dataRating) :
                    $xx1 += round(pow($dataRating->nilai_c1, 2), 4);
                    $xx2 += round(pow($dataRating->nilai_c2, 2), 4);
                    $xx3 += round(pow($dataRating->nilai_c3, 2), 4);
                    $xx4 += round(pow($dataRating->nilai_c4, 2), 4);
                    $xx5 += round(pow($dataRating->nilai_c5, 2), 4);
                    $xx6 += round(pow($dataRating->nilai_c6, 2), 4);
                ?>
                <?php endforeach;
                $x1 = round(sqrt($xx1), 4);
                $x2 = round(sqrt($xx2), 4);
                $x3 = round(sqrt($xx3), 4);
                $x4 = round(sqrt($xx4), 4);
                $x5 = round(sqrt($xx5), 4);
                $x6 = round(sqrt($xx6), 4);
                // var_dump($x1, $x2, $x3, $x4, $x5, $x6);
                ?>
                <?php
                foreach ($db->getRating() as $noo => $dataRating) :
                ?>
                <?php endforeach  ?>
                <?php
                // var_dump($bobot);
                $a1 = [];
                $a2 = [];
                $a3 = [];
                $a4 = [];
                $a5 = [];
                $a6 = [];
                foreach ($db->getRating() as $noo => $dataRating) :
                    $a1[] = round(($dataRating->nilai_c1 / $x1) * $bobot[0], 4);
                    $a2[] = round(($dataRating->nilai_c2 / $x2) * $bobot[1], 4);
                    $a3[] = round(($dataRating->nilai_c3 / $x3) * $bobot[2], 4);
                    $a4[] = round(($dataRating->nilai_c4 / $x4) * $bobot[3], 4);
                    $a5[] = round(($dataRating->nilai_c5 / $x5) * $bobot[4], 4);
                    $a6[] = round(($dataRating->nilai_c6 / $x6) * $bobot[5], 4);
                ?>
                <?php endforeach; ?>
                <tbody>
                    <?php
                    $ddPlus = null;
                    foreach ($db->getRating() as $noo => $dataRating) :
                        $ddPlus = round(
                            pow(max($a1) - (($dataRating->nilai_c1 / $x1) * $bobot[0]), 2) +
                                pow(max($a2) - (($dataRating->nilai_c2 / $x2) * $bobot[1]), 2) +
                                pow(max($a3) - (($dataRating->nilai_c3 / $x3) * $bobot[2]), 2) +
                                pow(max($a4) - (($dataRating->nilai_c4 / $x4) * $bobot[3]), 2) +
                                pow(max($a5) - (($dataRating->nilai_c5 / $x5) * $bobot[4]), 2) +
                                pow(max($a6) - (($dataRating->nilai_c6 / $x6) * $bobot[5]), 2),
                            4
                        );
                    ?>
                    <?php endforeach; ?>
                    <?php
                    $ddNeg = null;
                    foreach ($db->getRating() as $noo => $dataRating) :
                        $ddNeg = round(
                            pow(min($a1) - (($dataRating->nilai_c1 / $x1) * $bobot[0]), 2) +
                                pow(min($a2) - (($dataRating->nilai_c2 / $x2) * $bobot[1]), 2) +
                                pow(min($a3) - (($dataRating->nilai_c3 / $x3) * $bobot[2]), 2) +
                                pow(min($a4) - (($dataRating->nilai_c4 / $x4) * $bobot[3]), 2) +
                                pow(min($a5) - (($dataRating->nilai_c5 / $x5) * $bobot[4]), 2) +
                                pow(min($a6) - (($dataRating->nilai_c6 / $x6) * $bobot[5]), 2),
                            4
                        );
                    ?>
                    <?php endforeach; ?>
                    <?php
                    $ddNeg1 = null;
                    $ddPlus1 = null;
                    $v = null;
                    $r = [];
                    foreach ($db->getRating() as $noo => $dataRating) :
                        $ddPlus1 = round(
                            pow(max($a1) - (($dataRating->nilai_c1 / $x1) * $bobot[0]), 2) +
                                pow(max($a2) - (($dataRating->nilai_c2 / $x2) * $bobot[1]), 2) +
                                pow(max($a3) - (($dataRating->nilai_c3 / $x3) * $bobot[2]), 2) +
                                pow(max($a4) - (($dataRating->nilai_c4 / $x4) * $bobot[3]), 2) +
                                pow(max($a5) - (($dataRating->nilai_c5 / $x5) * $bobot[4]), 2) +
                                pow(max($a6) - (($dataRating->nilai_c6 / $x6) * $bobot[5]), 2),
                            4
                        );
                        $ddNeg1 = round(
                            pow(min($a1) - (($dataRating->nilai_c1 / $x1) * $bobot[0]), 2) +
                                pow(min($a2) - (($dataRating->nilai_c2 / $x2) * $bobot[1]), 2) +
                                pow(min($a3) - (($dataRating->nilai_c3 / $x3) * $bobot[2]), 2) +
                                pow(min($a4) - (($dataRating->nilai_c4 / $x4) * $bobot[3]), 2) +
                                pow(min($a5) - (($dataRating->nilai_c5 / $x5) * $bobot[4]), 2) +
                                pow(min($a6) - (($dataRating->nilai_c6 / $x6) * $bobot[5]), 2),
                            4
                        );

                        $r[] = $v = round($ddNeg1 / ($ddNeg1 + $ddPlus1), 4);
                    ?>
                    <?php endforeach; ?>
                    <?php
                    $result =  array_map(function ($hasil, $nama) {
                        return array('hasil' => $hasil, 'nama' => $nama);
                    }, $r, $alternative_nama);
                    ?>
                    <h4>Hasil & Penjurusan</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="10px">No</th>
                                <th>Nama Alternative</th>
                                <th>Penjurusan</th>
                                <th>Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result as $no => $data) :  ?>
                                <tr>
                                    <td><?= ++$no ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?php echo ($data['hasil'] > 0.70) ? 'IPA' : 'IPS'; ?></td>
                                    <td><?= $data['hasil'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <?php include 'components/custome.php' ?>
    </div>
    <!-- ./wrapper -->
    <?php include 'components/scripts.php' ?>
</body>

</html>