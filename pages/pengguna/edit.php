<?php
$id = $_GET['id'];
$dataPengguna = $db->getOnePengguna($id);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($db->editPengguna($_POST) > 0) {
        echo "
            <script>
            alert('Data berhasil di edit');
            window.location='index.php?page=pages/pengguna/index';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('Data gagal di edit');
        window.location='index.php?page=pages/pengguna/index';
        </script>
        ";
    }
}
?>
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
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" class="form-horizontal">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input value="<?php echo $dataPengguna->pengguna_id ?>" name="id" type="hidden">
                                    <input value="<?php echo $dataPengguna->pengguna_username ?>" name="username" type="text" class="form-control" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input value="<?php echo $dataPengguna->pengguna_password ?>" name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input value="<?php echo $dataPengguna->pengguna_nama ?>" name="nama" type="text" class="form-control" placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Level</label>
                                <div class="col-sm-10">
                                    <select id="level" name="level" class="form-control">
                                        <option value="1">Admin</option>
                                        <option value="2">Pimpinan</option>
                                    </select>
                                    <script>
                                        document.getElementById('level').value = <?php echo $dataPengguna->pengguna_level ?>
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button name="edit" type="submit" class="btn btn-info">Edit</button>
                            <a href="index.php?page=pages/pengguna/index" class="btn btn-success float-right">Kembali</a>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-3"></div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>