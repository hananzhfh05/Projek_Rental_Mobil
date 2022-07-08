  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Perawatan Rental Mobil</h1>
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

      <!-- Default box -->
      <div class="card">
        <!-- <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div> -->
        <div class="card-body">
        <div class="col-md-12">
 
            <table class="table table-striped mt-3">
            <thead class="table-dark">
            <tr class="text-center">
            <th>No</th><th>Id</th><th>Tanggal</th><th>Biaya</th>
            <th>KM Mobil</th><th>Deskripsi</th><th>Mobil</th><th>Jenis Perawatan</th><th>Action</th>
            </tr>
            </thead class="table-dark">
            <tbody>
            <?php
            $nomor = 1;
            foreach($list_rawat as $obj){
            ?>
            <tr class="text-center">
            <td><?=$nomor?></td>
            <td><?=$obj->id?></td>
            <td><?=$obj->tanggal?></td>
            <td><?=$obj->biaya?></td>
            <td><?=$obj->km_mobil?>
            <td><?=$obj->deskripsi?></td>
            <td><?=$obj->mobil_id?></td>
            <td><?=$obj->jenis_perawatan_id?></td>
            <td>
              <a href="perawatan/view?id=<?=$obj->id?>" role="button" class="btn btn-success">view</a> 
              <a href="perawatan/edit?id=<?=$obj->id?>" role="button" class="btn btn-warning">Edit</a> 
              <a href="perawatan/delete?id=<?=$obj->id?>"
              onclick="if(!confirm('Anda Yakin Hapus Id Perawatan <?=$obj->id?>?')) {return false}"
              role="button" class="btn btn-danger">Delete</a>
            </td>

            </tr>
            <?php
            $nomor++;
            }
            ?>
            </tbody>
            </table>
            <a class="btn btn-primary" href="<?php echo base_url('index.php/perawatan/create')?>" role="button">Create</a>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
