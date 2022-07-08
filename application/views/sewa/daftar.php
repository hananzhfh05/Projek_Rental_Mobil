<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Mobil</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Sewa</h3>

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
        <?php
              foreach($get_mobil as $obj){
            ?>
            <div class="container jumbotron">
              <div class="row">
                <div class="col-sm">
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
                <div class="col">
                  <h2><?=$obj->nama?> <?=$obj->produk?></h2> 
                  <p><?=$obj->deskripsi?></p>
                </div>
                
                <div class="col-md-3 offset-md-3 text-right">
                  <div class="direct-chat-msg">
                    <p class="direct-chat-infos">Mulai dari</p>
                    <div class="d-flex justify-content-end">
                      <h3><?=$obj->biaya_sewa?></h3>
                      <p class="direct-chat-infos">/hari</p>
                    </div>
                  </div>
                      <?php
                      ?>
                      <a href="<?php echo base_url('index.php/sewa/create/')?>?mobil_id=<?=$obj->id?>" 
                      onclick= "if(!$this->session->has_userdata('USERNAME')){ 
                        redirect(base_url().'index.php/login' ); //dipaksa harus login
                        }else{
                          redirect(base_url().'index.php/sewa/create/?mobil_id=<?=$obj->id?>' );
                        }" role="button" class="btn btn-primary">Pilih</a>
                    <!-- <a href="mahasiswa/mobil_id?id=" onclick= "if(!confirm('Anda Yakin Hapus Mahasiswa NIM ')){return false}" role="button" class="btn btn-primary">Delete</a> -->
                </div>
              </div>
            </div>
            <?php
              }
            ?>  
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