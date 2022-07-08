<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Sewa Mobil</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Sewa Mobil</h3>

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
              <?php
                foreach($sewa as $obj){
              ?>
              <table class="table table-striped">
                <tbody>
                  <tr><td>ID</td><td><?=$obj->id?></td></tr>
                  <tr><td>Tanggal Mulai</td><td><?=$obj->tanggal_mulai?></td></tr>
                  <tr><td>Tanggal Akhir</td><td><?=$obj->tanggal_akhir?></td></tr>
                  <tr><td>Tujuan</td><td><?=$obj->tujuan?></td></tr>
                  <tr><td>No KTP</td><td><?=$obj->noktp?></td></tr>
                  <tr><td>ID User</td><td><?=$obj->users_id?></td></tr>
                  <tr><td>ID Mobil</td><td><?=$obj->mobil_id?></td></tr>
                </tbody>
              </table>
            </div>
            <div class="col-sm-4">
              <?php
                $filegambar = base_url('uploads/'.$obj->foto);
                $array = get_headers($filegambar);
                $string = $array[0];
                if(strpos($string,"200")){
                  //echo url exis
                  echo '<img src="'.base_url('uploads/'.$obj->foto).'"class="img-thumbnail" alt="foto"/>';
                }
                else{
                //echo url doesnt exis
                echo '<img src="'.base_url('/uploads/no_gambar.jpg').'"class="img-thumbnail" alt="foto"/>';
                }
              ?>
            </div>
            <?php
                }
            ?>
            <div class="nav-link">
              <i class="fas fa-solid fa-chevrons-left"></i>
              <a href="<?php echo base_url('index.php/home')?>">Home</a>
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