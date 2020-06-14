<?php
$getUser = $this->session->userdata('session_user');
//$getGrup = $this->session->userdata('session_grup');
?>
	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DASHBOARD</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr bgcolor="#f7f7f7" align="center">
                      <td>No</td>
                      <td>Nama Proyek</td>
                      <td>Nama Mandor</td>
                    </tr>

					<?php
					$no=1;
					foreach ($user as $baris) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $baris->nama_proyek; ?></td>
						<td><?php echo $baris->nama_mandor; ?></td>
						<td></td>
						
					</tr>
					<?php 
					}
					?>
				
			</table>
		 </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      </div>
          <!-- Page Heading -->