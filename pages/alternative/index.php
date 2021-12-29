<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <br><br>
                    <h1 align=center style="font-family:Tahoma;" class="m-0 text-dark"> <strong>DATA ALTERNATIVE</strong> </h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Alternative</li>
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
                        <a href="index.php?page=pages/alternative/tambah" class="btn btn-success mb-4">Tambah Data</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width='5px'>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Agama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($db->getAllAlternative() as $no => $row) :  ?>
                                    <tr>
                                        <td><?= ++$no ?></td>
                                        <td><?= $row->alternative_nip ?></td>
                                        <td><?= $row->alternative_nama ?></td>
                                        <td><?= $row->alternative_jenis_kelamin ?></td>
                                        <td><?= $row->alternative_tgl_lahir ?></td>
                                        <td><?= $row->alternative_alamat ?></td>
                                        <td><?= $row->alternative_agama ?></td>
                                        <td width='120px'>
                                            <a href="index.php?page=pages/alternative/edit&id=<?= $row->alternative_id ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <a onclick="return confirm('Anda yakin hapus ?')" href="index.php?page=pages/alternative/hapus&id=<?= $row->alternative_id ?>" class="btn btn-sm btn-danger">Hapus</a>
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