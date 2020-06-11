<div class="row">
	<div class="col-lg-7">
		<div class="p-5">
			<div class="text-center">
				<h1 class="h-4 text-gray-900 mb-4">
					Tambah Data Proyek
				</h1>	
			</div>
			<!-- form untuk inputan data-->
			<form class="user" method="post" action="<?php echo base_url().'Mahasiswa/add'; ?>" >
				<div class="form-group">
					<input type="text" name="nama_proyek" class="form-control form-control-user" id="nama_proyek" placeholder="Nama Proyek" required="true">
				</div>
				<div class="form-group">
					<input type="text" name="nama_mandor" class="form-control form-control-user" id="nama_mandor" placeholder="Nama Mandor" required="true">
				</div>
				
					<button type="submit" name="submit" class="btn btn-success" style="padding:8px">Tambah Data</button> 
			</form><hr>
			<div class="text-center"><a class="small" href="<?php echo base_url('Mahasiswa/grup')?>">Kembali</a>
</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function goBack(){
		window.history.back();
	}
</script>