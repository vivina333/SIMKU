

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Tambah Bahan Bangunan</h6>
			</div>
			<div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr bgcolor="#f7f7f7" align="center">
                  	
			<form action="" method="post">
				<div class="form-group">
					<label for="id_bahan">Id Bahan</label>
					<input type="number" name="id_bahan" class="form-control" id="id_bahan">
					
				</div>
				<div class="form-group">
					<label for="id_projek">Id Projek</label>
					<input type="number" name="id_projek" class="form-control" id="id_projek">
					
				</div>
				<div class="form-group">
					<label for="nama_bahan">Nama Bahan</label>
					<input type="text" name="nama_bahan" class="form-control" id="nama_bahan">
					
				</div>
				<div class="form-group">
					<label for="jumlah">Jumlah</label>
					<input type="number" name="jumlah" class="form-control" id="jumlah">
					
				</div>
				<div class="form-group">
					<label for="satuan">Satuan</label>
					<input type="text" name="satuan" class="form-control" id="satuan">
					
				</div>
				<div class="form-group">
					<label for="harga_satuan">Harga Satuan</label>
					<input type="number" name="harga_satuan" class="form-control" id="harga_satuan">
					
				</div>
				<div class="form-group">
					<label for="harga_total">Harga Total</label>
					<input type="number" name="harga_total" class="form-control" id="harga_total">
					
				</div>
				<div>
				<a href="<?php echo base_url('Mahasiswa/bahan')?>" class="btn btn-danger float-right"><span class="text">Kembali</span>
				</a>
				</div>
				<button type="submit" name="tambah" class="btn btn-success float-right">Tambah Data</button>
			</form>	
				
			</div>
		</div>
			
		</div>
	</div>
</div>
</div>