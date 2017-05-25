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
            <li><a class="active" href="<?php echo base_url()."index.php"; ?>/spk/kriteria"><i class="fa fa-circle-o"></i> Kriteria</a></li>
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
      <h1>
        Ubah Kriteria
      </h1>
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
        <section class="col-lg-9 connectedSortable">
          
          
          <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="page-header">
      
      </div>
      
          <form style="position: fixed; top: 10%; left: 40%; width: 500px; " method="post" action="<?php echo base_url()."index.php/spk_alternatif/edit_alternatif" ?>">
            <div class="form-group">
            
            <input type="hidden" name="id_alternatif" value="<?php echo $id_alternatif; ?>"  >
          </div>
          <div class="form-group">
              <label >Nama Alternatif</label>
              <input type="text" class="form-control" name="nama_alternatif" value="<?php echo $nama_alternatif; ?>">
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
                  <input type="text" class="form-control" name="nilai_kriteria2"  value="<?php echo $nilai_kriteria2; ?>">
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
                  <input type="text" class="form-control" name="nilai_kriteria4" value="<?php echo $nilai_kriteria4; ?>">
                </div>
                <div class="form-group">
                  <label >Wawancara</label>
                  <input type="text" class="form-control" name="nilai_kriteria5" value="<?php echo $nilai_kriteria5; ?>">
                </div>
                <div class="form-group">
                  <label >Tes Tulis</label>
                  <input type="text" class="form-control" name="nilai_kriteria6" value="<?php echo $nilai_kriteria6; ?>">
                </div>

          <button type="submit" class="btn btn-primary">Ubah</button>
          <button type="button" onclick="location.href='<?php echo base_url()."index.php"; ?>/spk_alternatif/alternatif'" class="btn btn-success">Kembali</button>
        </form>
        
      </div>
      
    </div>

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

   
  </div>
 

</body>
<script src="<?php echo base_url()."assets/";?>plugins/jQuery/jquery-2.2.3.min.js"></script>

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
