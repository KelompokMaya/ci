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
            <li class="active"><a  href="<?php echo base_url()."index.php"; ?>/spk/kriteria"><i class="fa fa-circle-o"></i> Kriteria</a></li>
            <li><a href="<?php echo base_url()."index.php"; ?>/spk_alternatif/alternatif"><i class="fa fa-circle-o"></i> Alternatif</a></li>
            
          </ul>
        </li>
        <?php } else { ?>
          <li >
          <a  href="<?php echo base_url()."index.php"; ?>/spk_alternatif/alternatif">
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
        <li class="active">Kriteria</li>
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
                    <td style="width: 200px">Kriteria</td>
                    <td style="width: 150px">Pendidikan Terakhir</td>
                    <td style="width: 150px">Nilai IPK</td>
                    <td style="width: 150px">Usia</td>
                    <td style="width: 150px">Wawancara</td>
                    <td style="width: 150px">Tes Mengajar</td>
                    <td style="width: 150px">Tes Tulis</td>
                    <td style="width: 150px">Edit</td>
                    
                    
                </thead>
             
                  <?php 
           
                $i=1;
                foreach ($data as $row) {
 ?>
                <tbody>
              <tr style="text-align: center;">
                    <td style="background: #3c8dbc;color: white"><?php echo $row['nama_kriteria'];  ?></td>
                    <td><?php echo $row['perbandingan_ket1'];  ?></td>
                    <td><?php echo $row['perbandingan_ket2'];  ?></td>
                    <td><?php echo $row['perbandingan_ket3'];  ?></td>
                    <td><?php echo $row['perbandingan_ket4'];  ?></td>
                    <td><?php echo $row['perbandingan_ket5'];  ?></td>
                    <td style="height: 48px"><?php echo $row['perbandingan_ket6'];  ?></td>
                    <td class="text-center">

                    <?php if ($i!=6) { ?>
                    <a href="<?php echo base_url()."index.php/spk/lihat_edit_kriteria/".$row['id_kriteria']; ?>"  class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                      
                    <?php

                     $i++; 
                      }  ?>
                    
                    
                   

                    </td>
              </tr>
              </tbody>
              <?php 
               }  ?>
   

          </table>


                    
             
                    <a href="<?php echo base_url()."index.php/spk/normalisasi_kriteria"?>" style="width: 28%"   class="btn btn-block btn-success btn-lg"> Lihat Tabel Normalisasi</a>
                  

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

      



      
    


  
        <!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()."assets/";?>plugins/jQuery/jquery-2.2.3.min.js"></script>
            <!---script daftar penyelenggara-->
     
      

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
