<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <br><br>
                    <h1 align=center style="font-family:Tahoma;" class="m-0 text-dark"> <strong>DATA KRITERIA</strong> </h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Kriteria</li>
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
                        <!-- <a href="index.php?page=pages/kriteria/tambah" class="btn btn-success mb-4">Tambah Data</a> -->
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width='5px'>No</th>
                                    <th>Nama Kriteria</th>
                                    <th>Sifat</th>
                                    <th>Bobot</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($db->getAllKriteria() as $no => $row) : ?>
                                    <tr>
                                        <td><?= ++$no ?></td>
                                        <td><?= $row->kriteria_nama ?></td>
                                        <td><?= $row->kriteria_sifat ?></td>
                                        <td><?= $row->kriteria_bobot ?></td>
                                        <td width='60px'>
                                            <a href="index.php?page=pages/kriteria/edit&id=<?= $row->kriteria_id ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <!-- <a onclick="return confirm('Anda yakin hapus ?')" href="index.php?page=pages/kriteria/hapus&id=<?= $row->kriteria_id ?>" class="btn btn-sm btn-danger">Hapus</a> -->
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