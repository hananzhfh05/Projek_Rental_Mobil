 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Sewa</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr class="text-center">
                      <th>NO</th><th>ID</th><th>Tanggal Mulai</th><th>Tanggal Akhir</th>
                        <th>Tujuan</th><th>ID User</th><th>ID Mobil</th><th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $nomor = 1;
                    foreach($list_sewa as $obj){
                ?>
                    <tr class="text-center">
                        <td><?=$nomor?></td>
                        <td><?=$obj->id?></td>
                        <td><?=$obj->tanggal_mulai?></td>
                        <td><?=$obj->tanggal_akhir?></td>
                        <td><?=$obj->tujuan?></td>
                        <td><?=$obj->users_id?></td>
                        <td><?=$obj->mobil_id?></td>
                        <td>
                          <a href="sewa/view?id=<?=$obj->id?>" role="button" class="btn btn-success">View</div></a>
                          <a href="sewa/edit?id=<?=$obj->id?>" role="button" class="btn btn-warning">Edit</a>
                          <a href="sewa/delete?id=<?=$obj->id?>" onclick= "if(!confirm('Anda Yakin Hapus Sewa dengan ID <?=$obj->id?>')){return false}" role="button" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                    $nomor++;
                    }
                    ?>
                </tbody>
            </table>

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
  <!-- /.content-wrapper -->

