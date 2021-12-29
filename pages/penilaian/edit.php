<?php
$id = $_GET['id'];
$dataKriteria = $db->getOneKriteria($id);
// var_dump($dataKriteria);
// exit;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($db->editKriteria($_POST) > 0) {
        echo "
            <script>
            alert('Data berhasil di edit');
            window.location='index.php?page=pages/kriteria/index';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('Data gagal di edit');
        window.location='index.php?page=pages/kriteria/index';
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
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Kriteria</label>
                                    <div class="col-sm-9">
                                        <input value="<?= $dataKriteria->kriteria_id ?>" name="id" type="hidden">
                                        <input value="<?= $dataKriteria->kriteria_nama ?>" name="kriteria_nama" type="text" class="form-control" placeholder="Nama Kriteria">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Sifat Kriteria</label>
                                    <div class="col-sm-9">
                                        <select name="kriteria_sifat" id="kriteria_sifat" class="form-control">
                                            <option value="Benefit">Benefit</option>
                                            <option value="Cost">Cost</option>
                                        </select>
                                        <script>
                                            $('div select').val('<?= $dataKriteria->kriteria_sifat ?>');
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Bobot</label>
                                    <div class="col-sm-9">
                                        <input value="<?= $dataKriteria->kriteria_bobot ?>" name="kriteria_bobot" type="number" class="form-control" placeholder="Bobot">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button name="simpan" type="submit" class="btn btn-info">Simpan</button>
                            <a href="index.php?page=pages/kriteria/index" class="btn btn-success float-right">Kembali</a>
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