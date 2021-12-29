<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <br><br>
                    <h1 align=center style="font-family:Tahoma;" class="m-0 text-dark"> <strong>DATA PENGGUNA</strong> </h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Pengguna</li>
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
                        <a href="index.php?page=pages/pengguna/tambah" class="btn btn-success mb-4">Tambah Data</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width='5px'>No</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Nama</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($db->getAllPengguna() as $no => $row) :
                                    if ($row->pengguna_level == 1) {
                                        $level = 'Admin';
                                    } else {
                                        $level = 'Pimpinan';
                                    }
                                ?>
                                    <tr>
                                        <td><?= ++$no ?></td>
                                        <td><?= $row->pengguna_username ?></td>
                                        <td><?= $row->pengguna_password ?></td>
                                        <td><?= $row->pengguna_nama ?></td>
                                        <td><?= $level ?></td>
                                        <td width='120px'>
                                            <a href="index.php?page=pages/pengguna/edit&id=<?= $row->pengguna_id ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <a onclick="return confirm('Anda yakin hapus ?')" href="index.php?page=pages/pengguna/hapus&id=<?= $row->pengguna_id ?>" class="btn btn-sm btn-danger">Hapus</a>
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