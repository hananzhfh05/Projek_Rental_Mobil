<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Rental Mobil</h1>
          </div>
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
          <table class="table table-striped">
            <thead class="table-dark">
                <tr class="text-center"> 
                    <th>No</th> 
                    <th>Id</th>
                    <th>Nopol</th>
                    <th>Warna</th>
                    <th>Biaya Sewa</th>
                    <th>CC</th>
                    <th>Tahun</th>
                    <th>Merk</th>
                    <th>Action</th>
                    <!-- <th>Foto</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach($list_mbl as $obj){
                    ?>
                    <tr class="text-center">
                    <td><?=$nomor?></td>
                    <td><?=$obj->id?></td>
                    <td><?=$obj->nopol?></td>
                    <td><?=$obj->warna?></td>
                    <td><?=$obj->biaya_sewa?>
                    <td><?=$obj->cc?></td>
                    <td><?=$obj->tahun?></td>
                    <td><?=$obj->merk_id?></td>
                    <td>
                    <a href="mobil/view?id=<?=$obj->id?>" role="button" class="btn btn-success">view</a>
                    <a href="mobil/edit?id=<?=$obj->id?>" role="button" class="btn btn-warning">Edit</a>
                    <a href="mobil/delete?id=<?=$obj->id?>"
                    onclick="if(!confirm('Anda Yakin Hapus Id Mobil <?=$obj->id?>?')) {return false}"
                    role="button" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php
                $nomor++;
                }
                ?>
            </tbody>
          </table>
          <a class="btn btn-primary m-3" href="<?php echo base_url('index.php/mobil/create')?>" role="button">Create</a>
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