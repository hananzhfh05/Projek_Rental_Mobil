 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rental Mobil</h1>
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
          <!-- <h3 class="card-title">Daftar Rental Mobil</h3> -->
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
              <tr><td>ID</td><td><?=$mbl->id?></td></tr>
              <tr><td>Nopol</td><td><?=$mbl->nopol?></td></tr>
              <tr><td>Warna</td><td><?=$mbl->warna?></td></tr>
              <tr><td>Biaya Sewa</td><td><?=$mbl->biaya_sewa?></td></tr>
              <tr><td>Deskripsi</td><td><?=$mbl->deskripsi?></td></tr>
              <tr><td>CC</td><td><?=$mbl->cc?></td></tr>
              <tr><td>Tahun</td><td><?=$mbl->tahun?></td></tr>
              <tr><td>Merk Id</td><td><?=$mbl->merk_id?></td></tr>
              <!-- <tr><td>Foto</td><td></td></tr> -->
            </tbody>
        </table>
          </div>
          <div class="col-sm-4">
          <?php
              $filegambar = base_url('/uploads/'.$mbl->foto);
              $array = get_headers($filegambar);
              $string = $array[0];
              if(strpos($string,"200")){
                //echo url exis
                echo '<img src="'.base_url('uploads/'.$mbl->foto).'"class="img-thumbnail" alt="foto"/>';
              }
              else{
              //echo url doesnt exis
              echo '<img src="'.base_url('/uploads/no_gambar.jpg').'"class="img-thumbnail" alt="foto"/>';
              }
              ?>
              </br>
              Nama File : <?=$mbl->foto?>
              <?php
              echo form_open_multipart('mobil/upload');
              ?>
              <input type="hidden" name="id" value="<?=$mbl->id?>"/>
              </br>
              <input type="file" class="form-control" name="foto_mobil" size="20"/>
              <input type="submit" class="btn btn-success btn-sm m-3" value="upload"/>
              <?php
              echo form_close()
              ?>
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

  