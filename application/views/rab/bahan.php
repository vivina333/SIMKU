
   <div class="card shadow mb-2">
            <div class="card-header py-2"> 
             <h5 class="m-0 font-weight-bold text-primary">Transaksi Bahan Bangunan</h5></div>           
           <div class="card-body">
            <div class="d-sm float-right align-items-center justify-content-between mb-2">
             <a href="tambah3" class="btn btn-primary btn-icon-split">
        <span class="text">+ Tambah Data</span>
    </a></div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
        <thead>
          <tr bgcolor="#008B8B" align="center" class="text-light">
                      <td>No</td>
                      <td>Id Bahan</td>
                      <td>Id Proyek</td>
                      <td>Nama Bahan</td>
                      <td>Jumlah</td>
                      <td>Satuan</td>
                      <td>Harga Satuan</td>
                      <td>Harga Total</td>
                      <td>Tindakan</td>
                      
                    </tr>
                    <tbody>
          <?php
          $no=1;
          foreach ($bahan as $baris) {
          ?>
          <tr bgcolor="#F0F8FF" align="center">
            <td><?php echo $no++; ?></td>
            <td><?php echo $baris->id_bahan; ?></td>
            <td><?php echo $baris->id_projek; ?></td>
            <td><?php echo $baris->nama_bahan; ?></td>
            <td><?php echo $baris->jumlah; ?></td>
            <td><?php echo $baris->satuan; ?></td>
            <td><?php echo $baris->harga_satuan; ?></td>
            <td><?php echo $baris->harga_total; ?></td>
          
            
            <td><button type="button" name="edit" class="btn btn-warning edit" id="'.$row->id_jmlbiaya.'"> <i class="material-icons" style="font-size:15px">edit</i></button> <button type="button" name="delete" class="btn btn-danger delete" id="'.$row->id_jmlbiaya.'"> <i class="material-icons" style="font-size:15px">delete</i></button></td>
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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      </div>
          <!-- Page Heading -->