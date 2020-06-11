<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>

          <div class="card shadow mb-2">
            <div class="card-header py-2"> 
             <h5 class="m-0 font-weight-bold text-primary">Status Pengerjaan</h5></div>           
           <div class="card-body">
           	<div class="d-sm float-right align-items-center justify-content-between mb-2">
           	 <a href="tambahUser" class="btn btn-primary btn-icon-split">
					<span class="text">+ Tambah Data</span>
		</a></div>
           	<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
				<thead>
					<tr bgcolor="#D3D3D3" align="center">
						<th>No.</th>
			<th>Nama Mandor</th>
			<th>Gambar</th>
			<th>Waktu</th>
			<th>Keterangan</th>
					</tr>
				</thead>
				
				<tbody>

					<?php
					$no=1;
					foreach ($user as $baris) {
					?>
					<tr bgcolor="#F5F5F5" align="center">
						<td><?php echo $no++; ?></td>
						<td><?php echo $baris->username; ?></td>
						<td><?php echo $baris->nama; ?></td>
						
						<td align="center">
							<?php
							if ($getGrup==1) {
								echo '<a href="'.base_url('Mahasiswa/rubah/'.$baris->id).'" class="fa fa-edit"></a>';								
							 	echo " | ";							 	
							 	echo '<a href="'.base_url('Mahasiswa/hapusUser/'.$baris->id).'" class="fa fa-times"></a>';
							 } 
							?>
				</td>
					</tr>
					<?php 
					}
					?>
				</tbody>
			</table>
           </div>
       </div>       	
     </div>
 </div>
</div>
</div>