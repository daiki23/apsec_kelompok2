    
      <?php
      include "koneksi.php";
      // $query = mysqli_query($koneksi,"SELECT * FROM user ORDER BY id DESC");
      $query = mysqli_query($koneksi,"select * from user");
      ?>

    <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data - User</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">IndieTalk - Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama</th>
                      <th>username</th>
                      <th>E-Mail</th>
                      <th>Password</th>
                      <th>Level</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama</th>
                      <th>username</th>
                      <th>E-Mail</th>
                      <th>Password</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
              <?php if(mysqli_num_rows($query)>0){ ?>
                <?php
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $data["nama"];?></td>
                      <td><?php echo $data["username"];?></td>
                      <td><?php echo $data["email"];?></td>
                      <td><?php echo $data["password"];?></td>
                      <td><?php echo $data["level"];?></td>
                      <td>
                        <a href="hapus.php?id_user=<?php echo $data['id_user']; ?>">Delete</a> 
                        <a href="admin.php?page=edit&id_user=<?php echo $data['id_user']; ?> " >Update</a>  
                        
                      </td>
                    </tr>
                    <?php $no++; } ?>
                     <?php } ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

   

        </div>