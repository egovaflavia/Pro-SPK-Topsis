<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <br><br>
                    <h1 align=center style="font-family:Tahoma;" class="m-0 text-dark"> <strong>DATA PENILAIAN</strong> </h1>
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="index.php?page=pages/penilaian/tambah" class="btn btn-success mb-4">Tambah Data</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="10px" rowspan="2">Alternative</th>
                                    <th rowspan="2">Nama Alternative</th>
                                    <th colspan="6">Kriteria</th>
                                    <th rowspan="2">Aksi</th>
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
                                        <td>X<?= ++$noKec ?></td>
                                        <td><?= $dataRating->alternative_nama ?></td>
                                        <td><?= $dataRating->nilai_c1 ?></td>
                                        <td><?= $dataRating->nilai_c2 ?></td>
                                        <td><?= $dataRating->nilai_c3 ?></td>
                                        <td><?= $dataRating->nilai_c4 ?></td>
                                        <td><?= $dataRating->nilai_c5 ?></td>
                                        <td><?= $dataRating->nilai_c6 ?></td>
                                        <td width='100px'>
                                            <a onclick="return confirm('Anda yakin hapus ?')" href="index.php?page=pages/penilaian/hapus&id=<?= $dataRating->nilai_id ?>" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
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