<div class="row"><div class="col-lg-7">
	<div class="p-5"><div class="text-center">
	<h1 class="h4 text-gray-900 mb-4">Edit Data Grup</h1>
</div>
<?php foreach($grup as $baris){ ?>
	<form class="user" action="<?php echo base_url('Mahasiswa/perbarui');?>" method="post">
		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $baris->id_projek; ?>">
				<input type="text" class="form-control form-control-user" id="nama_proyek" name="nama_proyek" placeholder="" value="<?php echo $baris->nama_proyek; ?>" require>
				<input type="text" class="form-control form-control-user" id="nama_mandor" name="nama_mandor" placeholder="" value="<?php echo $baris->nama_proyek; ?>" require>
		</div>
	<div class="form-group">
		<select id="grup" class="form-control" name="grup" require>
		<option value="1" <?php if(($baris->grup)== 1){ echo "selected";}?>>Admin</option>
		<option value="2" <?php if(($baris->grup)== 2){ echo "selected";}?>>User</option>
		</select>
	</div>
		<button type="submit" name="submit" class="btn btn-success" style="padding:8px">Simpan Perubahan</button>
	</form><?php } ?>
	<hr>
<div class="text-center"><a class="small" href="<?php echo base_url('Mahasiswa/grup')?>">Kembali</a>
</div></div></div></div>