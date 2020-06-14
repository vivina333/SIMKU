

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Proyek</h6>
			</div>
			<div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr bgcolor="#f7f7f7" align="center">
                  	
			<form action="" method="post">
				<div class="form-group">
					<label for="id_projek">Id Proyek</label>
					<input type="number" name="id_projek" class="form-control" id="id_projek">
					
				</div>
				
				<div class="form-group">
					<label for="nama_proyek">Nama Proyek</label>
					<input type="text" name="nama_proyek" class="form-control" id="nama_proyek">
					
				</div>
				<div class="form-group">
					<label for="nama_mandor">Nama Mandor</label>
					<input type="text" name="nama_mandor" class="form-control" id="nama_mandor">
					
				</div>
				<div class="form-group">
					<label for="lokasi">Lokasi</label>
					<input type="text" name="lokasi" class="form-control" id="lokasi">
					
				</div>
				<div class="form-group">
					<label for="luas">Luas</label>
					<input type="number" name="luas" class="form-control" id="luas">
					
				</div>
				<div class="form-group">
					<label for="tanggal">Tanggal Proyek Dimulai</label>
					<input type="date" name="tanggal" class="form-control" id="tanggal">
					
				</div>
				<div>
				<a href="<?php echo base_url('Mahasiswa/grup')?>" class="btn btn-danger float-right"><span class="text">Kembali</span>
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