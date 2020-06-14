<div class="row">
	<div class="col-lg-7">
		<div class="p-5">
			<div class="text-center">
				<h1 class="h-4 text-gray-900 mb-4">
					Tambah User
				</h1>	
			</div>
			<!-- form untuk inputan data-->
			<form class="user" method="post" action="<?php echo base_url().'Mahasiswa/input'; ?>" enctype="multipart/form-data" >
				<div class="form-group">
					<input type="text" name="nama" class="form-control form-control-user" id="nama" placeholder="Nama Mandor" required="true">
				</div>
				<div class="form-group">
					<input type="file" name="foto" class="form-control form-control-user" id="foto">
				</div>
				<div class="form-group">
					<input type="date" name="date" class="form-control form-control-user" id="date" required="true">
				</div>
				<div class="form-group">
					<input type="text" name="ket" class="form-control form-control-user" id="ket" required="true">
				</div>
				<div class="form-group">
					<input type="text" name="proyek" class="form-control form-control-user" id="proyek" value="<?php echo $idProyek['id_proyek'];?>" required="true">
				</div>
				<div class="form-group">
					<select>
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
				</div>
				<div>
					<input type="text" name="proyek" class="form-control form-control-user" id="proyek" value="<?php echo $idProyek['id_proyek'];?>" required="true">
				</div>
					<input type="submit" name="submit" class="btn btn-success btn-icon-split" value="Tambah" style="padding:5px">
			</form><hr>
			<div class="text-center">
				<a class="small" onclick="goBack()">Kembali</a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function goBack(){
		window.history.back();
	}
</script>