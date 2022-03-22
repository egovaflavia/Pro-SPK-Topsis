<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <br><br>
          <h1 align=center style="font-family:Tahoma;" class="m-0 text-dark"> <strong>ANALISA</strong> </h1>
        </div><!-- /.col -->
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Data Penilaian</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- <div class="card-header">
                        <h3 class="card-title">Pengguna Adalah </h3>
                    </div> -->
          <!-- /.card-header -->
          <div class="card-body">
            <h4>1. Menentukan Kriteria dan Sifat</h4>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="10px">No</th>
                  <th>Nama Kriteria</th>
                  <th>Sifat</th>
                  <th>Bobot</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $bobot = [];
                $dataKriterias = $db->getAllKriteria();
                foreach ($dataKriterias as $no => $dataKriteria) :
                  $bobot[] = $dataKriteria->kriteria_bobot;
                ?>
                  <tr>
                    <td><?= ++$no ?></td>
                    <td><?= $dataKriteria->kriteria_nama ?></td>
                    <td><?= $dataKriteria->kriteria_sifat ?></td>
                    <td><?= $dataKriteria->kriteria_bobot ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

            <hr>

            <h4>2. Menentukan Rating Kecocokan</h4>
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
                foreach ($db->getRating() as $noKec => $dataRating) :
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

            <h4>3. Menentukan Matriks Keputusan Ternormalisasi</h4>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>X1</th>
                  <th>X2</th>
                  <th>X3</th>
                  <th>X4</th>
                  <th>X5</th>
                  <th>X6</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($db->getRating() as $noo => $dataRating) :
                ?>
                  <tr>
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
            <br>
            <h5>Matriks Ternormalisasi R</h5>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>X1</th>
                  <th>X2</th>
                  <th>X3</th>
                  <th>X4</th>
                  <th>X5</th>
                  <th>X6</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($db->getRating() as $noo => $dataRating) :
                ?>
                  <tr>
                    <td><?= round($dataRating->nilai_c1 / $x1, 4) ?></td>
                    <td><?= round($dataRating->nilai_c2 / $x2, 4) ?></td>
                    <td><?= round($dataRating->nilai_c3 / $x3, 4) ?></td>
                    <td><?= round($dataRating->nilai_c4 / $x4, 4) ?></td>
                    <td><?= round($dataRating->nilai_c5 / $x5, 4) ?></td>
                    <td><?= round($dataRating->nilai_c6 / $x6, 4) ?></td>
                  </tr>
                <?php endforeach  ?>
              </tbody>
            </table>
            <hr>
            <h4>4. Perkalian Antara Bobot Dengan Nilai Setiap Atribut (Matriks R)</h4>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>X1</th>
                  <th>X2</th>
                  <th>X3</th>
                  <th>X4</th>
                  <th>X5</th>
                  <th>X6</th>
                </tr>
              </thead>
              <tbody>
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
                  <tr>
                    <td><?= round(($dataRating->nilai_c1 / $x1) * $bobot[0], 4) ?></td>
                    <td><?= round(($dataRating->nilai_c2 / $x2) * $bobot[1], 4) ?></td>
                    <td><?= round(($dataRating->nilai_c3 / $x3) * $bobot[2], 4) ?></td>
                    <td><?= round(($dataRating->nilai_c4 / $x4) * $bobot[3], 4) ?></td>
                    <td><?= round(($dataRating->nilai_c5 / $x5) * $bobot[4], 4) ?></td>
                    <td><?= round(($dataRating->nilai_c6 / $x6) * $bobot[5], 4) ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

            <hr>

            <h4>5. Menentukan Matriks Solusi Ideal Positif & Negatif</h4>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>A+</th>
                  <td><?= round(max($a1), 4) ?></td>
                  <td><?= round(max($a2), 4) ?></td>
                  <td><?= round(max($a3), 4) ?></td>
                  <td><?= round(max($a4), 4) ?></td>
                  <td><?= round(max($a5), 4) ?></td>
                  <td><?= round(max($a6), 4) ?></td>
                </tr>
                <tr>
                  <th>A</th>
                  <td><?= round(min($a1), 4) ?></td>
                  <td><?= round(min($a2), 4) ?></td>
                  <td><?= round(min($a3), 4) ?></td>
                  <td><?= round(min($a4), 4) ?></td>
                  <td><?= round(min($a5), 4) ?></td>
                  <td><?= round(min($a6), 4) ?></td>
                </tr>
              </thead>
            </table>
            <br>

            <h4>6. Menghitung Jarak Solusi Ideal Positif (D+) dan Solusi Ideal Negatif (D-)</h4>
            <h5>Nilai Jarak Solusi Ideal Positif</h5>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>D +</th>
                </tr>
              </thead>
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
                  <tr>
                    <td>D <?= ++$noo ?> = <?= round(sqrt($ddPlus), 4) ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <br>
            <h5>Nilai Jarak Solusi Ideal Negatif</h5>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>D -</th>
                </tr>
              </thead>
              <tbody>
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
                  <tr>
                    <td>D <?= ++$noo ?> = <?= round(sqrt($ddNeg), 4) ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

            <hr>

            <h4>7. Menentukan Nilai Preferensi Untuk Setiap Alternatif</h4>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>V</th>
                </tr>
              </thead>
              <tbody>
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

                  $r[] = [
                    'nama' => $dataRating->alternative_nama,
                    'nilai' => $v = round($ddNeg1 / ($ddNeg1 + $ddPlus1), 4)];
                ?>
                  <tr>
                    <td>V <?= ++$noo ?> = <?= $v ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

            <hr>

            <h4>8. Perangkingan</h4>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="10px">No</th>
                  <th>Nama</th>
                  <th>Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($r as $no => $data) : ?>
                  <tr>
                    <td><?= ++$no ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['nilai'] ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>