

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Tambah Jumlah Biaya</h6>
			</div>
			<div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr bgcolor="#f7f7f7" align="center">
                  	
			<form action="" method="post">
				<div class="form-group">
					<label for="id_jmlbiaya">Id Jumlah Biaya</label>
					<input type="number" name="id_jmlbiaya" class="form-control" id="id_jmlbiaya">
					
				</div>
				<div class="form-group">
					<label for="id_projek">Id Projek</label>
					<input type="number" name="id_projek" class="form-control" id="id_projek">
					
				</div>
				<div class="form-group">
					<label for="uraian">Uraian</label>
					<input type="text" name="uraian" class="form-control" id="uraian">
					
				</div>
				<div class="form-group">
					<label for="volume">Volume</label>
					<input type="number" name="volume" class="form-control" id="volume">
					
				</div>
				<div class="form-group">
					<label for="luas">Luas</label>
					<input type="number" name="luas" class="form-control" id="luas">
					
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
				<a href="<?php echo base_url('Mahasiswa/jumlahbiaya')?>" class="btn btn-danger float-right"><span class="text">Kembali</span>
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