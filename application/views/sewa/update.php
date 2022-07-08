<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Sewa Mobil</h1>
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
                $hidden = ['idedit'=>$sewa_edit->id];

            ?>
            <?php echo form_open('sewa/save', '', $hidden)?>
              <div class="form-group row">
                <label for="id" class="col-4 col-form-label">ID</label> 
                <div class="col-8">
                  <input id="id" name="id" value="<?=$sewa_edit->id?>" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="tgl_mulai" class="col-4 col-form-label">Tanggal Mulai</label> 
                <div class="col-8">
                  <input id="tgl_mulai" name="tgl_mulai" value="<?=$sewa_edit->tanggal_mulai?>" type="date" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="tgl_akhir" class="col-4 col-form-label">Tanggal Akhir</label> 
                <div class="col-8">
                  <input id="tgl_akhir" name="tgl_akhir" value="<?=$sewa_edit->tanggal_akhir?>" type="date" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="tujuan" class="col-4 col-form-label">Tujuan</label> 
                <div class="col-8">
                  <input id="tujuan" name="tujuan" value="<?=$sewa_edit->tujuan?>" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="noktp" class="col-4 col-form-label">No KTP</label> 
                <div class="col-8">
                  <input id="noktp" name="noktp" value="<?=$sewa_edit->noktp?>" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="users_id" class="col-4 col-form-label">ID User</label> 
                <div class="col-8">
                  <input id="users_id" name="users_id" value="<?=$sewa_edit->users_id?>" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="mobil_id" class="col-4 col-form-label">ID Mobil</label> 
                <div class="col-8">
                  <input id="mobil_id" name="mobil_id" value="<?=$sewa_edit->mobil_id?>" type="text" class="form-control">
                </div>
              </div> 
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            <?php echo form_close()?> 
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