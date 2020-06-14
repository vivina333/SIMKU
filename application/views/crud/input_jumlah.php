<div class="container-fluid">
        <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Input Data Pemasokan</h6> <!--membuat judul pada card-->
  </div>
  <div class="card-body">
  <div class="table-responsive"><!--membuat tabel responsive-->
            <form action="<?php echo site_url('Mahasiswa/tambah_proses') ?>" method="post" enctype="multipart/form-data">
               <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">uraian</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control"
                 type="date" value="<?=date('Y-m-d')?>" name="uraian" value="<?php echo form_error('uraian') ? 'is-invalid':'' ?>" />
                <div class="invalid-feedback">
                </div>
                </div>
              </div>

               <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">volume</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control"
                 type="text" name="nama" placeholder="Masukkan volume" value="<?php echo form_error('volume') ? 'is-invalid':'' ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('volume') ?>
                </div>
              </div>
              </div>

               <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">luas</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control"
                 type="text" name="luas" placeholder="Masukkan luas" value="<?php echo form_error('luas') ? 'is-invalid':'' ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('luas') ?>
                </div>
              </div>
              </div>

              <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">harga_satuan</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control"
                 type="text" name="harga" min="0" placeholder="Masukkan harga satuan" value="<?php echo form_error('harga satuan') ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('harga satuan') ?>
                </div>
                </div>
              </div>

              <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Harga total</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control"
                 type="text" name="harga" min="0" placeholder="Masukkan harga total" value="<?php echo form_error('harga') ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('harga total') ?>
                </div>
                </div>
              </div>
              <br><br>
              <input class="btn btn-success" type="submit" name="btn" value="Save" />
              <br><br>
            </form>
            </div>
</div>
</div>
  </div>
  

      </div>
      <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('Login/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('asset/admin/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('asset/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('asset/admin/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('asset/admin/js/sb-admin-2.min.js')?>"></script>

</body>

</html>
