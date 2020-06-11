<?php
$getUser = $this->session->userdata('session_user');
//$getGrup = $this->session->userdata('session_grup');
?>
          <div class="card shadow mb-2">
            <div class="card-header py-2"> 
             <h5 class="m-0 font-weight-bold text-primary">Master Data</h5></div>           
           <div class="card-body">
           	<div class="d-sm float-right align-items-center justify-content-between mb-2">
           	 <a href="tambahGrup" class="btn btn-primary btn-icon-split">
				<span class="text">+ Tambah Data</span>
		</a></div>
           	<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
				<thead>
					<tr bgcolor="#D3D3D3" align="center">
                      <td>No</td>
                      <td>Id Proyek</td>
                      <td>Nama Proyek</td>
                      <td>Nama Mandor</td>
                      <td>R A B</td>
                      <td>Tindakan</td>
                    </tr>
				</thead>
				<tbody>
					<?php
					$no=1;
					foreach ($grup as $baris) {
					?>
					<tr bgcolor="#F5F5F5" align="center">
						<td><?php echo $no++; ?></td>
						<td><?php echo $baris->id_projek; ?></td>
						<td><?php echo $baris->nama_proyek; ?></td>
						<td><?php echo $baris->nama_mandor; ?></td>
						<td></td>
						<td align="center">
							<?php
							if ($getUser==1) {
								echo '<a href="'.base_url('Mahasiswa/rubah/'.$baris->id_projek).'" class="fa fa-edit"></a>';								
							 	echo " | ";							 	
							 	echo '<a href="'.base_url('Mahasiswa/hapusGrup/'.$baris->id_projek).'" class="fa fa-times"></a>';
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
           <hr>
           <div class="text-left"><a class="medium" href="<?php echo base_url('Mahasiswa')?>">Kembali</a>
       </div>       	
     </div>
 </div>
</div>
</div>