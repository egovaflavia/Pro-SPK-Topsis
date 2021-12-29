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
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // var_dump($_POST);
                // exit;
                if ($db->saveAlternative($_POST) > 0) {
                    echo "
                    <script>
                    alert('Data berhasil di simpan');
                    window.location='index.php?page=pages/alternative/index';
                    </script>
                    ";
                } else {
                    echo "
                <script>
                alert('Data gagal di simpan');
                window.location='index.php?page=pages/alternative/index';
                </script>
                ";
                }
            }
            ?>
            <div class="row justify-content-center">
                <div class="col-6 ">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Alternative</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NIP</label>
                                    <div class="col-sm-9">
                                        <input name="alternative_nip" type="text" class="form-control" placeholder="NIP">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input name="alternative_nama" type="text" class="form-control" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select name="alternative_jenis_kelamin" class="form-control">
                                            <option value="">Pilih</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input name="alternative_tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input name="alternative_alamat" type="text" class="form-control" placeholder="Alamat">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <select name="alternative_agama" class="form-control">
                                            <option value="">Pilih</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button name="simpan" type="submit" class="btn btn-info">Simpan</button>
                                <a href="index.php?page=pages/alternative/index" class="btn btn-success float-right">Kembali</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>