<?php
    include "../koneksi/koneksi.php";
    include "header.php";
?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Table Basic</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Table Basic</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="https://wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down"> Upgrade to Pro</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <?php
                    $tampil_data=mysqli_query($koneksi,"SELECT * FROM  biodata") or die(mysqli_error($tampil_data));
                    if(mysqli_num_rows($tampil_data)){
                        $no=1;
                ?>
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Biodata</h4>
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>E-mail</th>
                                                <th>Alamat</th>
                                                <th>Nomor HP</th>
                                                <th>Hobi</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Tempat Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Foto</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                <?php while($data=mysqli_fetch_assoc($tampil_data)){ ?>

                                        <tbody>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $data['nama']; ?></td>
                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['alamat']; ?></td>
                                                <td><?php echo $data['no_hp']; ?></td>
                                                <td><?php echo $data['hobi']; ?></td>
                                                <td><?php echo $data['tanggal_lahir']; ?></td>
                                                <td><?php echo $data['tempat_lahir']; ?></td>
                                                <td><?php echo $data['jenis_kelamin']; ?></td>
                                                <td><?php echo "<img width='30px' src='../upload/".$data['foto']."'>"; ?></td>
                                                <td colspan="2"><?php echo '<a href="../proses/proses_hapus_biodata.php?id_biodata='.$data["id_biodata"].'" onclick="return confirm(\'Anda Yakin Ingin Menghapus Data Ini ?\');"><input type="submit" value="HAPUS" class="btn btn-danger"></a>'?></td>
                                            </tr>
                                        </tbody>

                <?php $no++; }?>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php }
                else{
                    echo'<tr>Data Kosong</tr>';
                }
                ?>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 Adminwrap by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- jQuery peity -->
    <script src="assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="assets/node_modules/peity/jquery.peity.init.js"></script>
</body>

</html>