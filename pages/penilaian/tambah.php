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
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if ($db->saveNilai($_POST) > 0) {
                    echo "
                    <script>
                    alert('Data berhasil di simpan');
                    window.location='index.php?page=pages/penilaian/index';
                    </script>
                    ";
                } else {
                    echo "
                <script>
                alert('Data gagal di simpan');
                window.location='index.php?page=pages/penilaian/index';
                </script>
                ";
                }
            }
            ?>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-6">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Nilai</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Alternative</label>
                                    <div class="col-sm-9">
                                        <select name="alternative_id" id="alternative_id" class="form-control" required>
                                            <option value="">Pilih</option>
                                            <?php foreach ($db->getAllAlternativeNilai() as $row) : ?>
                                                <?php if (empty($row)) : ?>
                                                    <option value="">Semua Alternative Telah di Nilai</option>
                                                <?php else : ?>
                                                    <option value="<?= $row->alternative_id ?>"><?= $row->alternative_nip ?> - <?= $row->alternative_nama ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div id="detail">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nip</label>
                                        <div class="col-sm-9">
                                            <input id="nip" type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <input id="jenis_kelamin" type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input id="tgl_lahir" type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <input id="alamat" type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <input id="agama" type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Profesionalisme</label>
                                    <div class="col-sm-9">
                                        <select name="nilai_c1" class="form-control" required>
                                            <option value="">Pilih</option>
                                            <option value="1">Sangat Rendah</option>
                                            <option value="2">Rendah</option>
                                            <option value="3">Cukup</option>
                                            <option value="4">Tinggi</option>
                                            <option value="5">Sangat Tinggi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kinerja</label>
                                    <div class="col-sm-9">
                                        <select name="nilai_c2" class="form-control" required>
                                            <option value="">Pilih</option>
                                            <option value="1">Sangat Rendah</option>
                                            <option value="2">Rendah</option>
                                            <option value="3">Cukup</option>
                                            <option value="4">Tinggi</option>
                                            <option value="5">Sangat Tinggi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kepribadian</label>
                                    <div class="col-sm-9">
                                        <select name="nilai_c3" class="form-control" required>
                                            <option value="">Pilih</option>
                                            <option value="1">Sangat Rendah</option>
                                            <option value="2">Rendah</option>
                                            <option value="3">Cukup</option>
                                            <option value="4">Tinggi</option>
                                            <option value="5">Sangat Tinggi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Sosial</label>
                                    <div class="col-sm-9">
                                        <select name="nilai_c4" class="form-control" required>
                                            <option value="">Pilih</option>
                                            <option value="1">Sangat Rendah</option>
                                            <option value="2">Rendah</option>
                                            <option value="3">Cukup</option>
                                            <option value="4">Tinggi</option>
                                            <option value="5">Sangat Tinggi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kepatuhan</label>
                                    <div class="col-sm-9">
                                        <select name="nilai_c5" class="form-control" required>
                                            <option value="">Pilih</option>
                                            <option value="1">Sangat Rendah</option>
                                            <option value="2">Rendah</option>
                                            <option value="3">Cukup</option>
                                            <option value="4">Tinggi</option>
                                            <option value="5">Sangat Tinggi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Usia</label>
                                    <div class="col-sm-9">
                                        <select name="nilai_c6" class="form-control" required>
                                            <option value="">Pilih</option>
                                            <option value="1">25 - 29</option>
                                            <option value="2">30 - 34</option>
                                            <option value="3">35 - 39</option>
                                            <option value="4">40 - 44</option>
                                            <option value="5">45 - 49</option>
                                            <option value="6">>50 Tahun</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button name="simpan" type="submit" class="btn btn-info">Simpan</button>
                                <a href="index.php?page=pages/penilaian/index" class="btn btn-success float-right">Kembali</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-3"></div>
            </div>
        </section>
    </div>

    <script>
        $(document).ready(function () {
            $('#alternative_id').on('change', function () {
                $(this).val()
                if ($(this).val() != null) {
                    $.ajax({
                    type: "GET",
                    url: "getDataAlt.php",
                    data: {id : $(this).val()},
                    dataType: "json",
                    success: function (response) {
                        clear();

                        $('#nip').val(response.data.alternative_nip);
                        $('#jenis_kelamin').val(response.data.alternative_jenis_kelamin);
                        $('#tgl_lahir').val(response.data.alternative_tgl_lahir);
                        $('#alamat').val(response.data.alternative_alamat);
                        $('#agama').val(response.data.alternative_agama);
                    },
                    });
                }else{
                    clear();
                }
                
            });
        });

        function clear(){
            $('#nip').val("");
            $('#jenis_kelamin').val("");
            $('#tgl_lahir').val("");
            $('#alamat').val("");
            $('#agama').val("");
        }
    </script>