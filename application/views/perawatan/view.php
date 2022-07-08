 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Perawatan</h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Default Box -->
    <div class="card">
        <div class="card-header">
          <!-- <h3 class="card-title">Detail Perawatan</h3> -->
          Username : <?php echo $this->session->userdata('USERNAME');?>
          </br>
          UserID : <?php echo $this->session->userdata('USERID');?>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        
        <div class="row mb-2">
          <div class="col-sm-8">
          <table class="table table-striped">
            <tbody>
              <tr><td>Id</td><td><?=$rawat->id?></td></tr>
              <tr><td>Tanggal</td><td><?=$rawat->tanggal?></td></tr>
              <tr><td>Biaya</td><td><?=$rawat->biaya?></td></tr>
              <tr><td>KM Mobil</td><td><?=$rawat->km_mobil?></td></tr>
              <tr><td>Deskripsi</td><td><?=$rawat->deskripsi?></td></tr>
              <tr><td>Mobil</td><td><?=$rawat->mobil_id?></td></tr>
              <tr><td>Jenis Perawatan</td><td><?=$rawat->jenis_perawatan_id?></td></tr>
            </tbody>
</table>
          </div>
        </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>