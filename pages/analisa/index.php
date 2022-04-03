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
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h4>Pilih Tahun Ajaran</h4>
            <form target="blank" action="index.php?page=pages/analisa/data" method="POST">
              <div class="form-group">
                <label>Pilih Tahun</label>
                <select required name="tahun" class="form-control">
                  <option value="">Pilih</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                </select>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>