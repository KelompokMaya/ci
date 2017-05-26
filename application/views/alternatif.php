<?php $this->load->view("header") ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     
     <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url()."index.php"; ?>/spk/index">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
          </a>
        </li>
        
       <?php if($this->session->userdata('level') == '1'){
            ?>
        <li class="active treeview">
          <a href="<?php echo base_url()."index.php"; ?>/spk/index">
            <i class="fa fa-pie-chart"></i>
            <span>Komponen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a  href="<?php echo base_url()."index.php"; ?>/spk/kriteria"><i class="fa fa-circle-o"></i> Kriteria</a></li>
            <li class="active"><a  href="<?php echo base_url()."index.php"; ?>/spk_alternatif/alternatif"><i class="fa fa-circle-o"></i> Alternatif</a></li>
            
          </ul>
        </li>
        <?php } else { ?>
          <li class="active" >
          <a href="<?php echo base_url()."index.php"; ?>/spk_alternatif/alternatif">
            <i class="fa fa-user"></i> <span>Alternatif</span> 
          </a>
        </li>
     
        <?php }?>
       <li >
          <a href="<?php echo base_url()."index.php"; ?>/spk_alternatif/ranking">
            <i class="fa fa-trophy"></i> <span>Ranking</span> 
          </a>
        </li>
        </ul>
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2><center> Tabel Perbandingan Kriteria </center></h2>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Alternatif</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          
        
          <table border="1" style="text-align: center" class="table table-striped ">
                <thead style=";background: #3c8dbc;color: white">
                    <td style="width: 200px">Alternatif</td>
                    <td style="width: 140px">Pendidikan Terakhir</td>
                    <td style="width: 150px">Nilai IPK</td>
                    <td style="width: 150px">Usia</td>
                    <td style="width: 150px">Komunikasi</td>
                    <td style="width: 150px">Wawancara</td>
                    <td style="width: 150px">Tes Tulis</td>
                    <td style="width: 150px">Edit</td>
                    
                    
                </thead>
             
                  <?php 
           
                $i=1;
                foreach ($data as $row) {
 ?>
                <tbody>
              <tr style="text-align: center;">
                    <td style=";background: #3c8dbc;color: white"><?php echo $row['nama_alternatif'];  ?></td>
                    <td><?php 
                    if  ($row['nilai_kriteria1'] =='1') {
                      echo "SMA";
                    }if ($row['nilai_kriteria1'] =='2') {
                      echo "S1";
                    }if ($row['nilai_kriteria1'] =='3') {
                      echo "S2";
                    
                    }  ?></td>
                    <td><?php echo $row['nilai_kriteria2'];  ?></td>                  
                    <td><?php 
                    if ($row['nilai_kriteria3']=='5') {
                      echo "23 – 25 tahun";
                    }if ($row['nilai_kriteria3']=='4') {
                      echo "26 – 28 tahun";
                    }if ($row['nilai_kriteria3']=='3') {
                      echo "29 – 31 tahun";
                    }if ($row['nilai_kriteria3']=='2') {
                      echo "32 – 34 tahun";
                    }if ($row['nilai_kriteria3']=='1') {
                      echo ">35 tahun";
                    }  ?></td>
                    <td><?php echo $row['nilai_kriteria4'];  ?></td>
                    <td><?php echo $row['nilai_kriteria5'];  ?></td>
                    <td><?php echo $row['nilai_kriteria6'];  ?></td>
                    <td class="text-center">

                   
                    <a href="<?php echo base_url()."index.php/spk_alternatif/lihat_edit_alternatif/".$row['id_alternatif']; ?>"  class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                     <a href="<?php echo base_url()."index.php/spk_alternatif/hapus_alternatif/".$row['id_alternatif']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                      </td>
  
                    
                   

                    </td>
              </tr>
              </tbody>
              <?php 
               }  ?>
   

          </table>


                    
             
                    <a href="#" style="width: 20%"   class="btn btn-block btn-success "> Tambah Alternatif</a>
                  

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>WWW.KIM-ARYA.16MB.COM</b>
    </div>
    <strong>Copyright &copy; 2017 <a href="#">KIM ARYA PRODUCTION</a>.</strong> All rights
    reserved.
  </footer>

<!-- ./wrapper -->

<div class="container">
     <!-- Modal tambah kriteria -->
      <div class="modal fade" id="Modal-tambah-kriteria" role="dialog">
        <div class="modal-dialog">
        
          <div class="modal-content">
            <div class="modal-header" style="background: #00a65a; padding:15px 20px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h2 style="color: white" ><center><b>Tambah Alternatif</b></center></h2>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form id="form_tambah_kriteria" class="form-horizontal" action="<?php echo base_url()."index.php/spk_alternatif/tambah_alternatif"; ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label >Nama Alternatif</label>
                  <input type="text" class="form-control" name="nama_alternatif" placeholder="Masukan Alternatif">
                </div>
                <div class="form-group">
                <label >Pendidikan Terakhir</label>
                        <select name="nilai_kriteria1" class="form-control" required>
                        <option value="1">SMA</option>
                        <option value="2">S1</option>
                        <option value="3">S2</option>
                        </select>  
                </div>
                <div class="form-group">
                  <label >Nilai IPK</label>
                  <input type="text" class="form-control" name="nilai_kriteria2" placeholder="masukan nilai ipk">
                </div>
                <div class="form-group">
                <label >Usia</label>
                        <select name="nilai_kriteria3" class="form-control" required>
                        <option value="5">23 – 25 tahun</option>
                        <option value="4">26 – 28 tahun </option>
                        <option value="3">29 – 31 tahun</option>
                        <option value="2">32 – 34 tahun</option>
                        <option value="1"> >35 tahun</option>
                        </select>  
                </div>
                <div class="form-group">
                  <label >Komunikasi</label>
                  <input type="text" class="form-control" name="nilai_kriteria4" placeholder="masukan nilai">
                </div>
                <div class="form-group">
                  <label >Wawancara</label>
                  <input type="text" class="form-control" name="nilai_kriteria5" placeholder="masukan nilai">
                </div>
                <div class="form-group">
                  <label >Tes Tulis</label>
                  <input type="text" class="form-control" name="nilai_kriteria6" placeholder="masukan nilai">
                </div>
                
                
                  <button type="submit" href="index.php" type="submit" name="add" value="Simpan" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Tambah</button>
              </form>
            </div>     
          </div>
        </div>
      </div> 
      </div>
      



      
    


  
        <!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()."assets/";?>plugins/jQuery/jquery-2.2.3.min.js"></script>
            <!---script daftar penyelenggara-->
      <script>
      $(document).ready(function(){
          $(".btn-success").click(function(){
              $("#Modal-tambah-kriteria").modal();
          });
      });
      </script>
      

</body>

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()."assets/";?>bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url()."assets/";?>plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()."assets/";?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()."assets/";?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()."assets/";?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()."assets/";?>plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()."assets/";?>plugins/daterangepicker/daterangepicker.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()."assets/";?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()."assets/";?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets/";?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/";?>dist/js/app.min.js"></script>
</html>
