<?php
$getUser = $this->session->userdata('session_user');
//$getGrup = $this->session->userdata('session_grup');
?>
          <div class="card shadow mb-2">
            <div class="card-header py-2"> 
             <h5 class="m-0 font-weight-bold text-primary">Data Proyek</h5></div>           
           <div class="card-body">
           	<div class="d-sm float-right align-items-center justify-content-between mb-2">
           	 <a href="tambah2" class="btn btn-primary btn-icon-split">
				<span class="text">+ Tambah Data</span>
		</a></div>
           	<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
				<thead>
					<tr bgcolor="#008B8B" align="center" class="text-light">
                      <td>No</td>
                      <td>Id Proyek</td>
                      <td>Nama Proyek</td>
						<td>Nama Mandor</td>
						<td>Lokasi</td>
						<td>Luas (m2)</td>
						<td>Tanggal Proyek Dikerjakan</td>
                      <td>Tindakan</td>
                    </tr>
				</thead>
				<tbody>
					<?php
					$no=1;
					foreach ($grup as $baris) {
					?>
					<tr bgcolor="#F0F8FF" align="center">
						<td><?php echo $no++; ?></td>
						<td><?php echo $baris->id_projek; ?></td>
						<td><?php echo $baris->nama_proyek; ?></td>
						<td><?php echo $baris->nama_mandor; ?></td>
						<td><?php echo $baris->lokasi; ?></td>
						<td><?php echo $baris->luas; ?></td>
						<td><?php echo $baris->tanggal; ?></td>
						
						<td><button type="button" name="edit" class="btn btn-warning edit" id="'.$row->id_projek.'"> <i class="material-icons" style="font-size:15px">edit</i></button> <button type="button" name="delete" class="btn btn-danger delete" id="'.$row->id_projek.'"> <i class="material-icons" style="font-size:15px">delete</i></button></td>
						

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